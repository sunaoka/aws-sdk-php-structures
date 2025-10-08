<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetExportSnapshotRecords;

trait GetExportSnapshotRecordsTrait
{
    /**
     * @param GetExportSnapshotRecordsRequest $args
     * @return GetExportSnapshotRecordsResponse
     */
    public function getExportSnapshotRecords(GetExportSnapshotRecordsRequest $args)
    {
        $result = parent::getExportSnapshotRecords($args->toArray());
        return new GetExportSnapshotRecordsResponse($result->toArray());
    }
}
