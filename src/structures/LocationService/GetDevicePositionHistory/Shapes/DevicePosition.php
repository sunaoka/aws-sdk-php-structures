<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property list<double> $Position
 * @property PositionalAccuracy|null $Accuracy
 * @property array<string, string>|null $PositionProperties
 */
class DevicePosition extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     SampleTime: \Aws\Api\DateTimeResult,
     *     ReceivedTime: \Aws\Api\DateTimeResult,
     *     Position: list<double>,
     *     Accuracy?: PositionalAccuracy|null,
     *     PositionProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
