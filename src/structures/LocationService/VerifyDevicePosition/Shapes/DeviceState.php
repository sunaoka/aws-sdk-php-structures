<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property list<double> $Position
 * @property PositionalAccuracy $Accuracy
 * @property string $Ipv4Address
 * @property list<WiFiAccessPoint> $WiFiAccessPoints
 * @property CellSignals $CellSignals
 */
class DeviceState extends Shape
{
    /**
     * @param array{
     *     DeviceId: string,
     *     SampleTime: \Aws\Api\DateTimeResult,
     *     Position: list<double>,
     *     Accuracy?: PositionalAccuracy,
     *     Ipv4Address?: string,
     *     WiFiAccessPoints?: list<WiFiAccessPoint>,
     *     CellSignals?: CellSignals
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
