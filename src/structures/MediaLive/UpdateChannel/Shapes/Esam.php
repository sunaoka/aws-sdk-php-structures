<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property int<-1000, 1000>|null $AdAvailOffset
 * @property string|null $PasswordParam
 * @property string $PoisEndpoint
 * @property string|null $Username
 * @property string|null $ZoneIdentity
 */
class Esam extends Shape
{
    /**
     * @param array{
     *     AcquisitionPointId: string,
     *     AdAvailOffset?: int<-1000, 1000>|null,
     *     PasswordParam?: string|null,
     *     PoisEndpoint: string,
     *     Username?: string|null,
     *     ZoneIdentity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
