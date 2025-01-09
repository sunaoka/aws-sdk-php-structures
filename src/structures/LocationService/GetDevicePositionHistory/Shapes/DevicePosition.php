<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property \Aws\Api\DateTimeResult $ReceivedTime
 * @property list<double> $Position
 * @property PositionalAccuracy $Accuracy
 * @property array<string, string> $PositionProperties
 */
class DevicePosition extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
     *     ReceivedTime: \Aws\Api\DateTimeResult,
     *     Position: list<double>,
     *     Accuracy?: PositionalAccuracy,
     *     PositionProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
