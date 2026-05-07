<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentConnector;

trait DeletePaymentConnectorTrait
{
    /**
     * @param DeletePaymentConnectorRequest $args
     * @return DeletePaymentConnectorResponse
     */
    public function deletePaymentConnector(DeletePaymentConnectorRequest $args)
    {
        $result = parent::deletePaymentConnector($args->toArray());
        return new DeletePaymentConnectorResponse($result->toArray());
    }
}
