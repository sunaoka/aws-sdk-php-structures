<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectorVersions;

trait ListNetworkConnectorVersionsTrait
{
    /**
     * @param ListNetworkConnectorVersionsRequest $args
     * @return ListNetworkConnectorVersionsResponse
     */
    public function listNetworkConnectorVersions(ListNetworkConnectorVersionsRequest $args)
    {
        $result = parent::listNetworkConnectorVersions($args->toArray());
        return new ListNetworkConnectorVersionsResponse($result->toArray());
    }
}
