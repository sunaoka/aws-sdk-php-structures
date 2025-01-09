<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property int $AdAvailOffset
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
     *     AdAvailOffset?: int,
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
