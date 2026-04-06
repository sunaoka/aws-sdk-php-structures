<?php

namespace Sunaoka\Aws\Structures\GameSparks\ExportSnapshot;

trait ExportSnapshotTrait
{
    /**
     * @param ExportSnapshotRequest $args
     * @return ExportSnapshotResponse
     */
    public function exportSnapshot(ExportSnapshotRequest $args)
    {
        $result = parent::exportSnapshot($args->toArray());
        return new ExportSnapshotResponse($result->toArray());
    }
}
