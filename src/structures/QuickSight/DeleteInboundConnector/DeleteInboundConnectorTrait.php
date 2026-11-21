<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteInboundConnector;

trait DeleteInboundConnectorTrait
{
    /**
     * @param DeleteInboundConnectorRequest $args
     * @return DeleteInboundConnectorResponse
     */
    public function deleteInboundConnector(DeleteInboundConnectorRequest $args)
    {
        $result = parent::deleteInboundConnector($args->toArray());
        return new DeleteInboundConnectorResponse($result->toArray());
    }
}
