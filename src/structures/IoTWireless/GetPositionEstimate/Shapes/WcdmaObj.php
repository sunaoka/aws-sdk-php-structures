<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Mcc
 * @property int $Mnc
 * @property int $Lac
 * @property int $UtranCid
 * @property WcdmaLocalId $WcdmaLocalId
 * @property int $Rscp
 * @property int $PathLoss
 * @property list<WcdmaNmrObj> $WcdmaNmr
 */
class WcdmaObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int,
     *     Mnc: int,
     *     Lac?: int,
     *     UtranCid: int,
     *     WcdmaLocalId?: WcdmaLocalId,
     *     Rscp?: int,
     *     PathLoss?: int,
     *     WcdmaNmr?: list<WcdmaNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
