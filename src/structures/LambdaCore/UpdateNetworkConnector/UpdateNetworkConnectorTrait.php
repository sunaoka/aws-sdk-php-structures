<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateNetworkConnector;

trait UpdateNetworkConnectorTrait
{
    /**
     * @param UpdateNetworkConnectorRequest $args
     * @return UpdateNetworkConnectorResponse
     */
    public function updateNetworkConnector(UpdateNetworkConnectorRequest $args)
    {
        $result = parent::updateNetworkConnector($args->toArray());
        return new UpdateNetworkConnectorResponse($result->toArray());
    }
}
