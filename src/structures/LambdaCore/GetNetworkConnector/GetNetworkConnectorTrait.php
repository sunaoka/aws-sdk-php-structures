<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetNetworkConnector;

trait GetNetworkConnectorTrait
{
    /**
     * @param GetNetworkConnectorRequest $args
     * @return GetNetworkConnectorResponse
     */
    public function getNetworkConnector(GetNetworkConnectorRequest $args)
    {
        $result = parent::getNetworkConnector($args->toArray());
        return new GetNetworkConnectorResponse($result->toArray());
    }
}
