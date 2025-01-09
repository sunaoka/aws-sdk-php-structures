<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 262143> $Earfcn
 * @property int<0, 268435455> $CellId
 * @property int<0, 503> $Pci
 * @property int<-140, -44> $Rsrp
 * @property float $Rsrq
 */
class LteNetworkMeasurements extends Shape
{
    /**
     * @param array{
     *     Earfcn: int<0, 262143>,
     *     CellId: int<0, 268435455>,
     *     Pci: int<0, 503>,
     *     Rsrp?: int<-140, -44>,
     *     Rsrq?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
