<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 268435455> $CellId
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property LteLocalId $LocalId
 * @property list<LteNetworkMeasurements> $NetworkMeasurements
 * @property int<0, 1282> $TimingAdvance
 * @property bool $NrCapable
 * @property int<-140, -44> $Rsrp
 * @property float $Rsrq
 * @property int<0, 65535> $Tac
 */
class LteCellDetails extends Shape
{
    /**
     * @param array{
     *     CellId: int<0, 268435455>,
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     LocalId?: LteLocalId,
     *     NetworkMeasurements?: list<LteNetworkMeasurements>,
     *     TimingAdvance?: int<0, 1282>,
     *     NrCapable?: bool,
     *     Rsrp?: int<-140, -44>,
     *     Rsrq?: float,
     *     Tac?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
