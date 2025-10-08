<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ConvertRecoveryPointToSnapshot;

trait ConvertRecoveryPointToSnapshotTrait
{
    /**
     * @param ConvertRecoveryPointToSnapshotRequest $args
     * @return ConvertRecoveryPointToSnapshotResponse
     */
    public function convertRecoveryPointToSnapshot(ConvertRecoveryPointToSnapshotRequest $args)
    {
        $result = parent::convertRecoveryPointToSnapshot($args->toArray());
        return new ConvertRecoveryPointToSnapshotResponse($result->toArray());
    }
}
