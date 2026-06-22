<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectors;

trait ListNetworkConnectorsTrait
{
    /**
     * @param ListNetworkConnectorsRequest $args
     * @return ListNetworkConnectorsResponse
     */
    public function listNetworkConnectors(ListNetworkConnectorsRequest $args)
    {
        $result = parent::listNetworkConnectors($args->toArray());
        return new ListNetworkConnectorsResponse($result->toArray());
    }
}
