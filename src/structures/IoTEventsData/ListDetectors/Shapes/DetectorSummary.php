<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $keyValue
 * @property string $detectorModelVersion
 * @property DetectorStateSummary $state
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class DetectorSummary extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string,
     *     keyValue?: string,
     *     detectorModelVersion?: string,
     *     state?: DetectorStateSummary,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
