<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteNetworkConnector;

trait DeleteNetworkConnectorTrait
{
    /**
     * @param DeleteNetworkConnectorRequest $args
     * @return DeleteNetworkConnectorResponse
     */
    public function deleteNetworkConnector(DeleteNetworkConnectorRequest $args)
    {
        $result = parent::deleteNetworkConnector($args->toArray());
        return new DeleteNetworkConnectorResponse($result->toArray());
    }
}
