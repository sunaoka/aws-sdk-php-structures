<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<1, 65535> $Lac
 * @property int<0, 268435455> $UtranCid
 * @property WcdmaLocalId $WcdmaLocalId
 * @property int<-120, -25> $Rscp
 * @property int<46, 158> $PathLoss
 * @property list<WcdmaNmrObj> $WcdmaNmr
 */
class WcdmaObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     Lac?: int<1, 65535>,
     *     UtranCid: int<0, 268435455>,
     *     WcdmaLocalId?: WcdmaLocalId,
     *     Rscp?: int<-120, -25>,
     *     PathLoss?: int<46, 158>,
     *     WcdmaNmr?: list<WcdmaNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
