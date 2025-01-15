<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property int<0, 268435455> $EutranCid
 * @property int<0, 65535>|null $Tac
 * @property LteLocalId|null $LteLocalId
 * @property int<0, 1282>|null $LteTimingAdvance
 * @property int<-140, -44>|null $Rsrp
 * @property float|null $Rsrq
 * @property bool|null $NrCapable
 * @property list<LteNmrObj>|null $LteNmr
 */
class LteObj extends Shape
{
    /**
     * @param array{
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     EutranCid: int<0, 268435455>,
     *     Tac?: int<0, 65535>|null,
     *     LteLocalId?: LteLocalId|null,
     *     LteTimingAdvance?: int<0, 1282>|null,
     *     Rsrp?: int<-140, -44>|null,
     *     Rsrq?: float|null,
     *     NrCapable?: bool|null,
     *     LteNmr?: list<LteNmrObj>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
