<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateNetworkConnector;

trait CreateNetworkConnectorTrait
{
    /**
     * @param CreateNetworkConnectorRequest $args
     * @return CreateNetworkConnectorResponse
     */
    public function createNetworkConnector(CreateNetworkConnectorRequest $args)
    {
        $result = parent::createNetworkConnector($args->toArray());
        return new CreateNetworkConnectorResponse($result->toArray());
    }
}
