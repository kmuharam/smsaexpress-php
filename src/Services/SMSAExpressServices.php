<?php

namespace Kmuharam\SMSAExpress\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Kmuharam\SMSAExpress\Requests\CreateShipmentRequest;
use Kmuharam\SMSAExpress\Requests\PrintWaybillRequest;
use Kmuharam\SMSAExpress\Responses\CreateShipmentResponse;
use Kmuharam\SMSAExpress\Responses\PrintWaybillResponse;

class SMSAExpressServices
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected Client $client;

    /**
     * Create a new instance of SMSA Express Services.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://track.smsaexpress.com/SecomRestWebApi/api/',
            'allow_redirects' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Create Shipment with Shipper Details and get SMSA AWB Number.
     *
     * @param \Kmuharam\SMSAExpress\Requests\CreateShipmentRequest $request
     *
     * @return \Kmuharam\SMSAExpress\Responses\CreateShipmentResponse
     */
    public function createSingle(
        CreateShipmentRequest $request
    ): CreateShipmentResponse {
        try {
            $response = $this->post('addship', $request->buildBodyPayload());

            $parsedResponse = json_decode($response->getBody()->getContents());

            return new CreateShipmentResponse($parsedResponse);
        } catch (ClientException $e) {
            $response = $e->getResponse();

            $parsedResponse = json_decode($response->getBody());

            return new CreateShipmentResponse($parsedResponse, true);
        }
    }

    /**
     * Create Shipment with Shipper Details and get SMSA AWB Number.
     *
     * @param \Kmuharam\SMSAExpress\Requests\CreateShipmentRequest $request
     *
     * @return \Kmuharam\SMSAExpress\Responses\CreateShipmentResponse
     */
    public function createMultiple(
        CreateShipmentRequest $request
    ): CreateShipmentResponse {
        try {
            $response = $this->post('addShipMps', $request->buildBodyPayload());

            $parsedResponse = json_decode($response->getBody()->getContents());

            return new CreateShipmentResponse($parsedResponse);
        } catch (ClientException $e) {
            $response = $e->getResponse();

            $parsedResponse = json_decode($response->getBody());

            return new CreateShipmentResponse($parsedResponse, true);
        }
    }

    /**
     * Get AWB Print in PDF.
     *
     * @param \Kmuharam\SMSAExpress\Requests\PrintWaybillRequest $request
     *
     * @return \Kmuharam\SMSAExpress\Responses\PrintWaybillResponse
     */
    public function printWaybill(
        PrintWaybillRequest $request
    ): PrintWaybillResponse {
        try {
            $response = $this->get('getPDF', $request->buildQueryParams());

            $parsedResponse = $response->getBody()->getContents();

            return new PrintWaybillResponse($parsedResponse);
        } catch (ClientException $e) {
            $response = $e->getResponse();

            $parsedResponse = json_decode($response->getBody());

            return new PrintWaybillResponse($parsedResponse, true);
        }
    }

    /**
     * Send a get request.
     *
     * @param string $url
     * @param array  $query
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function get(string $url, array $query = []): Response
    {
        return $this->client->request('GET', $url, [
            RequestOptions::QUERY => array_merge(
                $query
            ),
        ]);
    }

    /**
     * Send a post request.
     *
     * @param string $url
     * @param array  $payload
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    public function post(string $url, array $payload = []): Response
    {
        return $this->client->request('POST', $url, [
            RequestOptions::JSON => $payload,
        ]);
    }
}
