<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Mcc
 * @property int $Mnc
 * @property int $Lac
 * @property int $UtranCid
 * @property TdscdmaLocalId $TdscdmaLocalId
 * @property int $TdscdmaTimingAdvance
 * @property int $Rscp
 * @property int $PathLoss
 * @property list<TdscdmaNmrObj> $TdscdmaNmr
 */
class TdscdmaObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int,
     *     Mnc: int,
     *     Lac?: int,
     *     UtranCid: int,
     *     TdscdmaLocalId?: TdscdmaLocalId,
     *     TdscdmaTimingAdvance?: int,
     *     Rscp?: int,
     *     PathLoss?: int,
     *     TdscdmaNmr?: list<TdscdmaNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
