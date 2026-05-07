<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentConnector;

trait CreatePaymentConnectorTrait
{
    /**
     * @param CreatePaymentConnectorRequest $args
     * @return CreatePaymentConnectorResponse
     */
    public function createPaymentConnector(CreatePaymentConnectorRequest $args)
    {
        $result = parent::createPaymentConnector($args->toArray());
        return new CreatePaymentConnectorResponse($result->toArray());
    }
}
