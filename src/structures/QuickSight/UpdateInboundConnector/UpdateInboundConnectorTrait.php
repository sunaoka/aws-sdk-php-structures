<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnector;

trait UpdateInboundConnectorTrait
{
    /**
     * @param UpdateInboundConnectorRequest $args
     * @return UpdateInboundConnectorResponse
     */
    public function updateInboundConnector(UpdateInboundConnectorRequest $args)
    {
        $result = parent::updateInboundConnector($args->toArray());
        return new UpdateInboundConnectorResponse($result->toArray());
    }
}
