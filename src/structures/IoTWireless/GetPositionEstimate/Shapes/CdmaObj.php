<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32767> $SystemId
 * @property int<0, 65535> $NetworkId
 * @property int<0, 65535> $BaseStationId
 * @property int<0, 4095> $RegistrationZone
 * @property CdmaLocalId $CdmaLocalId
 * @property int<-142, -49> $PilotPower
 * @property float $BaseLat
 * @property float $BaseLng
 * @property list<CdmaNmrObj> $CdmaNmr
 */
class CdmaObj extends Shape
{
    /**
     * @param array{
     *     SystemId: int<1, 32767>,
     *     NetworkId: int<0, 65535>,
     *     BaseStationId: int<0, 65535>,
     *     RegistrationZone?: int<0, 4095>,
     *     CdmaLocalId?: CdmaLocalId,
     *     PilotPower?: int<-142, -49>,
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
