<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PositionalAccuracy|null $Accuracy
 * @property string $DeviceId
 * @property list<double> $Position
 * @property array<string, string>|null $PositionProperties
 * @property \Aws\Api\DateTimeResult $SampleTime
 */
class ListDevicePositionsResponseEntry extends Shape
{
    /**
     * @param array{
     *     Accuracy?: PositionalAccuracy|null,
     *     DeviceId: string,
     *     Position: list<double>,
     *     PositionProperties?: array<string, string>|null,
     *     SampleTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
