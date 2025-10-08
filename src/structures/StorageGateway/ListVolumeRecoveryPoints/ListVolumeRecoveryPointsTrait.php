<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeRecoveryPoints;

trait ListVolumeRecoveryPointsTrait
{
    /**
     * @param ListVolumeRecoveryPointsRequest $args
     * @return ListVolumeRecoveryPointsResponse
     */
    public function listVolumeRecoveryPoints(ListVolumeRecoveryPointsRequest $args)
    {
        $result = parent::listVolumeRecoveryPoints($args->toArray());
        return new ListVolumeRecoveryPointsResponse($result->toArray());
    }
}
