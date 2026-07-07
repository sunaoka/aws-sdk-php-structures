<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCloudConnectors;

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
