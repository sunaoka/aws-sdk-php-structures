<?php

namespace Sunaoka\Aws\Structures\Evs\ListEnvironmentConnectors;

trait ListEnvironmentConnectorsTrait
{
    /**
     * @param ListEnvironmentConnectorsRequest $args
     * @return ListEnvironmentConnectorsResponse
     */
    public function listEnvironmentConnectors(ListEnvironmentConnectorsRequest $args)
    {
        $result = parent::listEnvironmentConnectors($args->toArray());
        return new ListEnvironmentConnectorsResponse($result->toArray());
    }
}
