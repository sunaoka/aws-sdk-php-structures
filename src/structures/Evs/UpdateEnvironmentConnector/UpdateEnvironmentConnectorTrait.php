<?php

namespace Sunaoka\Aws\Structures\Evs\UpdateEnvironmentConnector;

trait UpdateEnvironmentConnectorTrait
{
    /**
     * @param UpdateEnvironmentConnectorRequest $args
     * @return UpdateEnvironmentConnectorResponse
     */
    public function updateEnvironmentConnector(UpdateEnvironmentConnectorRequest $args)
    {
        $result = parent::updateEnvironmentConnector($args->toArray());
        return new UpdateEnvironmentConnectorResponse($result->toArray());
    }
}
