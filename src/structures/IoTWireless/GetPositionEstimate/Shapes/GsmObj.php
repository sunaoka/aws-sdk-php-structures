<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Mcc
 * @property int $Mnc
 * @property int $Lac
 * @property int $GeranCid
 * @property GsmLocalId $GsmLocalId
 * @property int $GsmTimingAdvance
 * @property int $RxLevel
 * @property list<GsmNmrObj> $GsmNmr
 */
class GsmObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int,
     *     Mnc: int,
     *     Lac: int,
     *     GeranCid: int,
     *     GsmLocalId?: GsmLocalId,
     *     GsmTimingAdvance?: int,
     *     RxLevel?: int,
     *     GsmNmr?: list<GsmNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
