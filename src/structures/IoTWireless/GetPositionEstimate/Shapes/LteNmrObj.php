<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pci
 * @property int $Earfcn
 * @property int $EutranCid
 * @property int $Rsrp
 * @property float $Rsrq
 */
class LteNmrObj extends Shape
{
    /**
     * @param array{
     *     Pci: int,
     *     Earfcn: int,
     *     EutranCid: int,
     *     Rsrp?: int,
     *     Rsrq?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
