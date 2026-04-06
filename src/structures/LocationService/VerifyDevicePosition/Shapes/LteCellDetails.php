<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 268435455> $CellId
 * @property int<200, 999> $Mcc
 * @property int<0, 999> $Mnc
 * @property LteLocalId|null $LocalId
 * @property list<LteNetworkMeasurements>|null $NetworkMeasurements
 * @property int<0, 1282>|null $TimingAdvance
 * @property bool|null $NrCapable
 * @property int<-140, -44>|null $Rsrp
 * @property float|null $Rsrq
 * @property int<0, 65535>|null $Tac
 */
class LteCellDetails extends Shape
{
    /**
     * @param array{
     *     CellId: int<0, 268435455>,
     *     Mcc: int<200, 999>,
     *     Mnc: int<0, 999>,
     *     LocalId?: LteLocalId|null,
     *     NetworkMeasurements?: list<LteNetworkMeasurements>|null,
     *     TimingAdvance?: int<0, 1282>|null,
     *     NrCapable?: bool|null,
     *     Rsrp?: int<-140, -44>|null,
     *     Rsrq?: float|null,
     *     Tac?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
