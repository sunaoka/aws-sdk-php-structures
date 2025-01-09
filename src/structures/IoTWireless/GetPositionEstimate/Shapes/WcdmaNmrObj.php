<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383> $Uarfcndl
 * @property int<0, 511> $Psc
 * @property int<0, 268435455> $UtranCid
 * @property int<-120, -25> $Rscp
 * @property int<46, 158> $PathLoss
 */
class WcdmaNmrObj extends Shape
{
    /**
     * @param array{
     *     Uarfcndl: int<0, 16383>,
     *     Psc: int<0, 511>,
     *     UtranCid: int<0, 268435455>,
     *     Rscp?: int<-120, -25>,
     *     PathLoss?: int<46, 158>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
