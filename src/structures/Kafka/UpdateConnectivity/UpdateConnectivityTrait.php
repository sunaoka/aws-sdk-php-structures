<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateConnectivity;

trait UpdateConnectivityTrait
{
    /**
     * @param UpdateConnectivityRequest $args
     * @return UpdateConnectivityResponse
     */
    public function updateConnectivity(UpdateConnectivityRequest $args)
    {
        $result = parent::updateConnectivity($args->toArray());
        return new UpdateConnectivityResponse($result->toArray());
    }
}
