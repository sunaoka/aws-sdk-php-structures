<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<1, 65535>|null $Lac
 * @property int<0, 268435455> $UtranCid
 * @property WcdmaLocalId|null $WcdmaLocalId
 * @property int<-120, -25>|null $Rscp
 * @property int<46, 158>|null $PathLoss
 * @property list<WcdmaNmrObj>|null $WcdmaNmr
 */
class WcdmaObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     Lac?: int<1, 65535>|null,
     *     UtranCid: int<0, 268435455>,
     *     WcdmaLocalId?: WcdmaLocalId|null,
     *     Rscp?: int<-120, -25>|null,
     *     PathLoss?: int<46, 158>|null,
     *     WcdmaNmr?: list<WcdmaNmrObj>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
