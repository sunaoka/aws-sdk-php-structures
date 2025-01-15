<?php

namespace Sunaoka\Aws\Structures\XRay\PutTelemetryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int|null $SegmentsReceivedCount
 * @property int|null $SegmentsSentCount
 * @property int|null $SegmentsSpilloverCount
 * @property int|null $SegmentsRejectedCount
 * @property BackendConnectionErrors|null $BackendConnectionErrors
 */
class TelemetryRecord extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     SegmentsReceivedCount?: int|null,
     *     SegmentsSentCount?: int|null,
     *     SegmentsSpilloverCount?: int|null,
     *     SegmentsRejectedCount?: int|null,
     *     BackendConnectionErrors?: BackendConnectionErrors|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
