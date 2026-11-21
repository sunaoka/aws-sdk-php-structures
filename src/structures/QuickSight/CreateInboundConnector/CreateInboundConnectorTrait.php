<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateInboundConnector;

trait CreateInboundConnectorTrait
{
    /**
     * @param CreateInboundConnectorRequest $args
     * @return CreateInboundConnectorResponse
     */
    public function createInboundConnector(CreateInboundConnectorRequest $args)
    {
        $result = parent::createInboundConnector($args->toArray());
        return new CreateInboundConnectorResponse($result->toArray());
    }
}
