<?php

namespace Kmuharam\SMSAExpress\Responses;

use stdClass;

class CreateShipmentResponse
{
    /**
     * @var stdClass|string
     */
    public stdClass|string $raw;

    /**
     * @var bool
     */
    public bool $exception;

    /**
     * Create a new instance of Create Shipment Response.
     *
     * @param stdClass|string $rawResponse
     * @param bool            $exception
     *
     * @return void
     */
    public function __construct(stdClass|string $rawResponse, bool $exception = false)
    {
        $this->raw = $rawResponse;

        $this->exception = $exception;
    }

    /*
     * Returns true if there is an API error.
     *
     * @return bool
     */
    public function hasError(): bool
    {
        if ($this->exception) {
            return true;
        }

        if (is_string($this->raw) && str_contains(strtolower($this->raw), 'failed')) {
            return true;
        }

        return false;
    }
}
