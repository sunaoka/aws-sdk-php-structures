<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironmentNetwork;

trait UpdateKxEnvironmentNetworkTrait
{
    /**
     * @param UpdateKxEnvironmentNetworkRequest $args
     * @return UpdateKxEnvironmentNetworkResponse
     */
    public function updateKxEnvironmentNetwork(UpdateKxEnvironmentNetworkRequest $args)
    {
        $result = parent::updateKxEnvironmentNetwork($args->toArray());
        return new UpdateKxEnvironmentNetworkResponse($result->toArray());
    }
}
