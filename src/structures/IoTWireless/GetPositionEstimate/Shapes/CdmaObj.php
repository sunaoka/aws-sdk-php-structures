<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32767> $SystemId
 * @property int<0, 65535> $NetworkId
 * @property int<0, 65535> $BaseStationId
 * @property int<0, 4095>|null $RegistrationZone
 * @property CdmaLocalId|null $CdmaLocalId
 * @property int<-142, -49>|null $PilotPower
 * @property float|null $BaseLat
 * @property float|null $BaseLng
 * @property list<CdmaNmrObj>|null $CdmaNmr
 */
class CdmaObj extends Shape
{
    /**
     * @param array{
     *     SystemId: int<1, 32767>,
     *     NetworkId: int<0, 65535>,
     *     BaseStationId: int<0, 65535>,
     *     RegistrationZone?: int<0, 4095>|null,
     *     CdmaLocalId?: CdmaLocalId|null,
     *     PilotPower?: int<-142, -49>|null,
     *     BaseLat?: float|null,
     *     BaseLng?: float|null,
     *     CdmaNmr?: list<CdmaNmrObj>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
