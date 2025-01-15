<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<1, 65535> $Lac
 * @property int<0, 65535> $GeranCid
 * @property GsmLocalId|null $GsmLocalId
 * @property int<0, 63>|null $GsmTimingAdvance
 * @property int<-110, -25>|null $RxLevel
 * @property list<GsmNmrObj>|null $GsmNmr
 */
class GsmObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     Lac: int<1, 65535>,
     *     GeranCid: int<0, 65535>,
     *     GsmLocalId?: GsmLocalId|null,
     *     GsmTimingAdvance?: int<0, 63>|null,
     *     RxLevel?: int<-110, -25>|null,
     *     GsmNmr?: list<GsmNmrObj>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
