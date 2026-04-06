<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListCloudConnectors;

trait ListCloudConnectorsTrait
{
    /**
     * @param ListCloudConnectorsRequest $args
     * @return ListCloudConnectorsResponse
     */
    public function listCloudConnectors(ListCloudConnectorsRequest $args)
    {
        $result = parent::listCloudConnectors($args->toArray());
        return new ListCloudConnectorsResponse($result->toArray());
    }
}
