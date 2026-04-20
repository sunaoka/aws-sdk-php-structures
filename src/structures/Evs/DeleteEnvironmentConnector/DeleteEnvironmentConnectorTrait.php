<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironmentConnector;

trait DeleteEnvironmentConnectorTrait
{
    /**
     * @param DeleteEnvironmentConnectorRequest $args
     * @return DeleteEnvironmentConnectorResponse
     */
    public function deleteEnvironmentConnector(DeleteEnvironmentConnectorRequest $args)
    {
        $result = parent::deleteEnvironmentConnector($args->toArray());
        return new DeleteEnvironmentConnectorResponse($result->toArray());
    }
}
