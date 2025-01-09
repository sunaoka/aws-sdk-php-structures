<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property list<double> $Position
 * @property PositionalAccuracy $Accuracy
 * @property array<string, string> $PositionProperties
 */
class ListDevicePositionsResponseEntry extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
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
