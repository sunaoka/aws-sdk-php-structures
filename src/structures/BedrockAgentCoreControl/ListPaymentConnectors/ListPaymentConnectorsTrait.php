<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentConnectors;

trait ListPaymentConnectorsTrait
{
    /**
     * @param ListPaymentConnectorsRequest $args
     * @return ListPaymentConnectorsResponse
     */
    public function listPaymentConnectors(ListPaymentConnectorsRequest $args)
    {
        $result = parent::listPaymentConnectors($args->toArray());
        return new ListPaymentConnectorsResponse($result->toArray());
    }
}
