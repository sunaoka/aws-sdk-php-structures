<?php

namespace Sunaoka\Aws\Structures\LocationService\VerifyDevicePosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CellId
 * @property int $Mcc
 * @property int $Mnc
 * @property LteLocalId $LocalId
 * @property list<LteNetworkMeasurements> $NetworkMeasurements
 * @property int $TimingAdvance
 * @property bool $NrCapable
 * @property int $Rsrp
 * @property float $Rsrq
 * @property int $Tac
 */
class LteCellDetails extends Shape
{
    /**
     * @param array{
     *     CellId: int,
     *     Mcc: int,
     *     Mnc: int,
     *     LocalId?: LteLocalId,
     *     NetworkMeasurements?: list<LteNetworkMeasurements>,
     *     TimingAdvance?: int,
     *     NrCapable?: bool,
     *     Rsrp?: int,
     *     Rsrq?: float,
     *     Tac?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
