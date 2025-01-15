<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<1, 65535>|null $Lac
 * @property int<0, 268435455> $UtranCid
 * @property TdscdmaLocalId|null $TdscdmaLocalId
 * @property int<0, 1530>|null $TdscdmaTimingAdvance
 * @property int<-120, -25>|null $Rscp
 * @property int<46, 158>|null $PathLoss
 * @property list<TdscdmaNmrObj>|null $TdscdmaNmr
 */
class TdscdmaObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     Lac?: int<1, 65535>|null,
     *     UtranCid: int<0, 268435455>,
     *     TdscdmaLocalId?: TdscdmaLocalId|null,
     *     TdscdmaTimingAdvance?: int<0, 1530>|null,
     *     Rscp?: int<-120, -25>|null,
     *     PathLoss?: int<46, 158>|null,
     *     TdscdmaNmr?: list<TdscdmaNmrObj>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
