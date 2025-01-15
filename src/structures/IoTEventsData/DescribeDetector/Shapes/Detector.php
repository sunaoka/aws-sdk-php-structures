<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detectorModelName
 * @property string|null $keyValue
 * @property string|null $detectorModelVersion
 * @property DetectorState|null $state
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 */
class Detector extends Shape
{
    /**
     * @param array{
     *     detectorModelName?: string|null,
     *     keyValue?: string|null,
     *     detectorModelVersion?: string|null,
     *     state?: DetectorState|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
