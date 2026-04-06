<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchGetDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PositionalAccuracy|null $Accuracy
 * @property string|null $DeviceId
 * @property list<double> $Position
 * @property array<string, string>|null $PositionProperties
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property \Aws\Api\DateTimeResult $SampleTime
 */
class DevicePosition extends Shape
{
    /**
     * @param array{
     *     Accuracy?: PositionalAccuracy|null,
     *     DeviceId?: string|null,
     *     Position: list<double>,
     *     PositionProperties?: array<string, string>|null,
     *     ReceivedTime: \Aws\Api\DateTimeResult,
     *     SampleTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
