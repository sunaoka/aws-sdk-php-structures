<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListActionConnectors;

trait ListActionConnectorsTrait
{
    /**
     * @param ListActionConnectorsRequest $args
     * @return ListActionConnectorsResponse
     */
    public function listActionConnectors(ListActionConnectorsRequest $args)
    {
        $result = parent::listActionConnectors($args->toArray());
        return new ListActionConnectorsResponse($result->toArray());
    }
}
