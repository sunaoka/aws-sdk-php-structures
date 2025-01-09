<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorModelName
 * @property string $keyValue
 * @property string $detectorModelVersion
 * @property DetectorState $state
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class Detector extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string,
     *     keyValue?: string,
     *     detectorModelVersion?: string,
     *     state?: DetectorState,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
