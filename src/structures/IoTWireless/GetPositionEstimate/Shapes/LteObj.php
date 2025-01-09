<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Mcc
 * @property int $Mnc
 * @property int $EutranCid
 * @property int $Tac
 * @property LteLocalId $LteLocalId
 * @property int $LteTimingAdvance
 * @property int $Rsrp
 * @property float $Rsrq
 * @property bool $NrCapable
 * @property list<LteNmrObj> $LteNmr
 */
class LteObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int,
     *     Mnc: int,
     *     EutranCid: int,
     *     Tac?: int,
     *     LteLocalId?: LteLocalId,
     *     LteTimingAdvance?: int,
     *     Rsrp?: int,
     *     Rsrq?: float,
     *     NrCapable?: bool,
     *     LteNmr?: list<LteNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
