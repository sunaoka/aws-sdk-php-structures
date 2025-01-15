<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 503> $Pci
 * @property int<0, 262143> $Earfcn
 * @property int<0, 268435455> $EutranCid
 * @property int<-140, -44>|null $Rsrp
 * @property float|null $Rsrq
 */
class LteNmrObj extends Shape
{
    /**
     * @param array{
     *     Pci: int<0, 503>,
     *     Earfcn: int<0, 262143>,
     *     EutranCid: int<0, 268435455>,
     *     Rsrp?: int<-140, -44>|null,
     *     Rsrq?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
