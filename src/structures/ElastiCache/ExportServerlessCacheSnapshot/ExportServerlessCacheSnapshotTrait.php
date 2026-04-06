<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ExportServerlessCacheSnapshot;

trait ExportServerlessCacheSnapshotTrait
{
    /**
     * @param ExportServerlessCacheSnapshotRequest $args
     * @return ExportServerlessCacheSnapshotResponse
     */
    public function exportServerlessCacheSnapshot(ExportServerlessCacheSnapshotRequest $args)
    {
        $result = parent::exportServerlessCacheSnapshot($args->toArray());
        return new ExportServerlessCacheSnapshotResponse($result->toArray());
    }
}
