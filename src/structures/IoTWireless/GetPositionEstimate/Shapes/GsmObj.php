<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<1, 65535> $Lac
 * @property int<0, 65535> $GeranCid
 * @property GsmLocalId $GsmLocalId
 * @property int<0, 63> $GsmTimingAdvance
 * @property int<-110, -25> $RxLevel
 * @property list<GsmNmrObj> $GsmNmr
 */
class GsmObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     Lac: int<1, 65535>,
     *     GeranCid: int<0, 65535>,
     *     GsmLocalId?: GsmLocalId,
     *     GsmTimingAdvance?: int<0, 63>,
     *     RxLevel?: int<-110, -25>,
     *     GsmNmr?: list<GsmNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
