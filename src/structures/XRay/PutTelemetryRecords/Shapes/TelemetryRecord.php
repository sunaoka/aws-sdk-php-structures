<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int $SegmentsReceivedCount
 * @property int $SegmentsSentCount
 * @property int $SegmentsSpilloverCount
 * @property int $SegmentsRejectedCount
 * @property BackendConnectionErrors $BackendConnectionErrors
 */
class TelemetryRecord extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     SegmentsReceivedCount?: int,
     *     SegmentsSentCount?: int,
     *     SegmentsSpilloverCount?: int,
     *     SegmentsRejectedCount?: int,
     *     BackendConnectionErrors?: BackendConnectionErrors
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
