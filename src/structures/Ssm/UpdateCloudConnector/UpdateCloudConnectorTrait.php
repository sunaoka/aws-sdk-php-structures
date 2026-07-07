<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateCloudConnector;

trait UpdateCloudConnectorTrait
{
    /**
     * @param UpdateCloudConnectorRequest $args
     * @return UpdateCloudConnectorResponse
     */
    public function updateCloudConnector(UpdateCloudConnectorRequest $args)
    {
        $result = parent::updateCloudConnector($args->toArray());
        return new UpdateCloudConnectorResponse($result->toArray());
    }
}
