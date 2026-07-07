<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteCloudConnector;

trait DeleteCloudConnectorTrait
{
    /**
     * @param DeleteCloudConnectorRequest $args
     * @return DeleteCloudConnectorResponse
     */
    public function deleteCloudConnector(DeleteCloudConnectorRequest $args)
    {
        $result = parent::deleteCloudConnector($args->toArray());
        return new DeleteCloudConnectorResponse($result->toArray());
    }
}
