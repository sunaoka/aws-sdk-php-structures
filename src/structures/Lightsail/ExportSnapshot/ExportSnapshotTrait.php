<?php

namespace Sunaoka\Aws\Structures\Lightsail\ExportSnapshot;

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
