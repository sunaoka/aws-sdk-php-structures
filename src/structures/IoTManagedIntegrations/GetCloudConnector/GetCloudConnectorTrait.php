<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCloudConnector;

trait GetCloudConnectorTrait
{
    /**
     * @param GetCloudConnectorRequest $args
     * @return GetCloudConnectorResponse
     */
    public function getCloudConnector(GetCloudConnectorRequest $args)
    {
        $result = parent::getCloudConnector($args->toArray());
        return new GetCloudConnectorResponse($result->toArray());
    }
}
