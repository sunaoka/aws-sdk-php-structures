<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionHealth;

trait SendCisSessionHealthTrait
{
    /**
     * @param SendCisSessionHealthRequest $args
     * @return SendCisSessionHealthResponse
     */
    public function sendCisSessionHealth(SendCisSessionHealthRequest $args)
    {
        $result = parent::sendCisSessionHealth($args->toArray());
        return new SendCisSessionHealthResponse($result->toArray());
    }
}
