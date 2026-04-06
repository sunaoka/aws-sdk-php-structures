<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCloudConnector;

trait CreateCloudConnectorTrait
{
    /**
     * @param CreateCloudConnectorRequest $args
     * @return CreateCloudConnectorResponse
     */
    public function createCloudConnector(CreateCloudConnectorRequest $args)
    {
        $result = parent::createCloudConnector($args->toArray());
        return new CreateCloudConnectorResponse($result->toArray());
    }
}
