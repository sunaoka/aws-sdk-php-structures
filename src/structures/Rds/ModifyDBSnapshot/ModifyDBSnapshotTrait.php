<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSnapshot;

trait ModifyDBSnapshotTrait
{
    /**
     * @param ModifyDBSnapshotRequest $args
     * @return ModifyDBSnapshotResponse
     */
    public function modifyDBSnapshot(ModifyDBSnapshotRequest $args)
    {
        $result = parent::modifyDBSnapshot($args->toArray());
        return new ModifyDBSnapshotResponse($result->toArray());
    }
}
