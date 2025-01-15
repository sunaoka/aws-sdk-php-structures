<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchEvaluateGeofences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property list<double> $Position
 * @property PositionalAccuracy|null $Accuracy
 * @property array<string, string>|null $PositionProperties
 */
class DevicePositionUpdate extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
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
