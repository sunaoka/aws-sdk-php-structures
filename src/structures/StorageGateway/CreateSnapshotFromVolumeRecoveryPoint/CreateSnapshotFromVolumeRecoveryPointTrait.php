<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSnapshotFromVolumeRecoveryPoint;

trait CreateSnapshotFromVolumeRecoveryPointTrait
{
    /**
     * @param CreateSnapshotFromVolumeRecoveryPointRequest $args
     * @return CreateSnapshotFromVolumeRecoveryPointResponse
     */
    public function createSnapshotFromVolumeRecoveryPoint(CreateSnapshotFromVolumeRecoveryPointRequest $args)
    {
        $result = parent::createSnapshotFromVolumeRecoveryPoint($args->toArray());
        return new CreateSnapshotFromVolumeRecoveryPointResponse($result->toArray());
    }
}
