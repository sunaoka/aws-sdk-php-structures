<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetSnapshot;

trait GetSnapshotTrait
{
    /**
     * @param GetSnapshotRequest $args
     * @return GetSnapshotResponse
     */
    public function getSnapshot(GetSnapshotRequest $args)
    {
        $result = parent::getSnapshot($args->toArray());
        return new GetSnapshotResponse($result->toArray());
    }
}
