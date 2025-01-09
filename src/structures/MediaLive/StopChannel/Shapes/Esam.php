<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property int<-1000, 1000> $AdAvailOffset
 * @property string $PasswordParam
 * @property string $PoisEndpoint
 * @property string $Username
 * @property string $ZoneIdentity
 */
class Esam extends Shape
{
    /**
     * @param array{
     *     AcquisitionPointId: string,
     *     AdAvailOffset?: int<-1000, 1000>,
     *     PasswordParam?: string,
     *     PoisEndpoint: string,
     *     Username?: string,
     *     ZoneIdentity?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
