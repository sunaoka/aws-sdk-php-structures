<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SystemId
 * @property int $NetworkId
 * @property int $BaseStationId
 * @property int $RegistrationZone
 * @property CdmaLocalId $CdmaLocalId
 * @property int $PilotPower
 * @property float $BaseLat
 * @property float $BaseLng
 * @property list<CdmaNmrObj> $CdmaNmr
 */
class CdmaObj extends Shape
{
    /**
     * @param array{
     *     SystemId: int,
     *     NetworkId: int,
     *     BaseStationId: int,
     *     RegistrationZone?: int,
     *     CdmaLocalId?: CdmaLocalId,
     *     PilotPower?: int,
     *     BaseLat?: float,
     *     BaseLng?: float,
     *     CdmaNmr?: list<CdmaNmrObj>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
