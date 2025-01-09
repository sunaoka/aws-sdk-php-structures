<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Earfcn
 * @property int $CellId
 * @property int $Pci
 * @property int $Rsrp
 * @property float $Rsrq
 */
class LteNetworkMeasurements extends Shape
{
    /**
     * @param array{
     *     Earfcn: int,
     *     CellId: int,
     *     Pci: int,
     *     Rsrp?: int,
     *     Rsrq?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
