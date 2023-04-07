<?php

namespace Kmuharam\SMSAExpress\Requests;

class PrintWaybillRequest
{
    /**
     * Unique Code for each Customer provided by SMSA.
     *
     * @var string
     */
    public string $passkey = '';

    /**
     * @var string
     */
    public string $awbno = '';

    /**
     * Returns an array representation of the model query parameters.
     *
     * @return array
     */
    public function buildQueryParams(): array
    {
        return [
            'passKey' => $this->passkey,
            'awbno' => $this->awbno,
        ];
    }
}
