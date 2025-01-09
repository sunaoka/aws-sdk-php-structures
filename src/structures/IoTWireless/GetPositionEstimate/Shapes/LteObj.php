<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<0, 268435455> $EutranCid
 * @property int<0, 65535> $Tac
 * @property LteLocalId $LteLocalId
 * @property int<0, 1282> $LteTimingAdvance
 * @property int<-140, -44> $Rsrp
 * @property float $Rsrq
 * @property bool $NrCapable
 * @property list<LteNmrObj> $LteNmr
 */
class LteObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     EutranCid: int<0, 268435455>,
     *     Tac?: int<0, 65535>,
     *     LteLocalId?: LteLocalId,
     *     LteTimingAdvance?: int<0, 1282>,
     *     Rsrp?: int<-140, -44>,
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
