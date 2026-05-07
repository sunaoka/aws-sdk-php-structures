<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentConnector;

trait UpdatePaymentConnectorTrait
{
    /**
     * @param UpdatePaymentConnectorRequest $args
     * @return UpdatePaymentConnectorResponse
     */
    public function updatePaymentConnector(UpdatePaymentConnectorRequest $args)
    {
        $result = parent::updatePaymentConnector($args->toArray());
        return new UpdatePaymentConnectorResponse($result->toArray());
    }
}
