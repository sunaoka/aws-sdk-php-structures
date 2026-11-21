<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectors;

trait ListInboundConnectorsTrait
{
    /**
     * @param ListInboundConnectorsRequest $args
     * @return ListInboundConnectorsResponse
     */
    public function listInboundConnectors(ListInboundConnectorsRequest $args)
    {
        $result = parent::listInboundConnectors($args->toArray());
        return new ListInboundConnectorsResponse($result->toArray());
    }
}
