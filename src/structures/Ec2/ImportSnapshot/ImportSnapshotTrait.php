<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot;

trait ImportSnapshotTrait
{
    /**
     * @param ImportSnapshotRequest $args
     * @return ImportSnapshotResponse
     */
    public function importSnapshot(ImportSnapshotRequest $args)
    {
        $result = parent::importSnapshot($args->toArray());
        return new ImportSnapshotResponse($result->toArray());
    }
}
