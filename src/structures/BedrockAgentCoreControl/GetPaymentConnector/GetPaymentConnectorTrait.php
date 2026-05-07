<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentConnector;

trait GetPaymentConnectorTrait
{
    /**
     * @param GetPaymentConnectorRequest $args
     * @return GetPaymentConnectorResponse
     */
    public function getPaymentConnector(GetPaymentConnectorRequest $args)
    {
        $result = parent::getPaymentConnector($args->toArray());
        return new GetPaymentConnectorResponse($result->toArray());
    }
}
