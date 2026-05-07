<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment;

trait ProcessPaymentTrait
{
    /**
     * @param ProcessPaymentRequest $args
     * @return ProcessPaymentResponse
     */
    public function processPayment(ProcessPaymentRequest $args)
    {
        $result = parent::processPayment($args->toArray());
        return new ProcessPaymentResponse($result->toArray());
    }
}
