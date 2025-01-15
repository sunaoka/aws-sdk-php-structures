<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property list<double> $Position
 * @property PositionalAccuracy|null $Accuracy
 * @property string|null $Ipv4Address
 * @property list<WiFiAccessPoint>|null $WiFiAccessPoints
 * @property CellSignals|null $CellSignals
 */
class DeviceState extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
     *     Position: list<double>,
     *     Accuracy?: PositionalAccuracy|null,
     *     Ipv4Address?: string|null,
     *     WiFiAccessPoints?: list<WiFiAccessPoint>|null,
     *     CellSignals?: CellSignals|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
