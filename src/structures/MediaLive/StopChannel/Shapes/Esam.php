<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcquisitionPointId
 * @property int|null $AdAvailOffset
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
     *     AdAvailOffset?: int|null,
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
