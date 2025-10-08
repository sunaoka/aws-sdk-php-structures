<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume;

trait CopySnapshotAndUpdateVolumeTrait
{
    /**
     * @param CopySnapshotAndUpdateVolumeRequest $args
     * @return CopySnapshotAndUpdateVolumeResponse
     */
    public function copySnapshotAndUpdateVolume(CopySnapshotAndUpdateVolumeRequest $args)
    {
        $result = parent::copySnapshotAndUpdateVolume($args->toArray());
        return new CopySnapshotAndUpdateVolumeResponse($result->toArray());
    }
}
