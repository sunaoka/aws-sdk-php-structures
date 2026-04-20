<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentConnector;

trait CreateEnvironmentConnectorTrait
{
    /**
     * @param CreateEnvironmentConnectorRequest $args
     * @return CreateEnvironmentConnectorResponse
     */
    public function createEnvironmentConnector(CreateEnvironmentConnectorRequest $args)
    {
        $result = parent::createEnvironmentConnector($args->toArray());
        return new CreateEnvironmentConnectorResponse($result->toArray());
    }
}
