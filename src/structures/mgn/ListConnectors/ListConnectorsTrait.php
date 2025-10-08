<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors;

trait ListConnectorsTrait
{
    /**
     * @param ListConnectorsRequest $args
     * @return ListConnectorsResponse
     */
    public function listConnectors(ListConnectorsRequest $args)
    {
        $result = parent::listConnectors($args->toArray());
        return new ListConnectorsResponse($result->toArray());
    }
}
