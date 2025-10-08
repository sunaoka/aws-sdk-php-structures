<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords;

trait PutTelemetryRecordsTrait
{
    /**
     * @param PutTelemetryRecordsRequest $args
     * @return PutTelemetryRecordsResponse
     */
    public function putTelemetryRecords(PutTelemetryRecordsRequest $args)
    {
        $result = parent::putTelemetryRecords($args->toArray());
        return new PutTelemetryRecordsResponse($result->toArray());
    }
}
