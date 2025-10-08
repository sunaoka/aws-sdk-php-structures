<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshot;

trait ModifyClusterSnapshotTrait
{
    /**
     * @param ModifyClusterSnapshotRequest $args
     * @return ModifyClusterSnapshotResponse
     */
    public function modifyClusterSnapshot(ModifyClusterSnapshotRequest $args)
    {
        $result = parent::modifyClusterSnapshot($args->toArray());
        return new ModifyClusterSnapshotResponse($result->toArray());
    }
}
