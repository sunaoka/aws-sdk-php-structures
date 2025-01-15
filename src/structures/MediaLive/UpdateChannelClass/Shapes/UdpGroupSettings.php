<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM'|null $InputLossAction
 * @property 'NONE'|'PRIV'|'TDRL'|null $TimedMetadataId3Frame
 * @property int<0, max>|null $TimedMetadataId3Period
 */
class UdpGroupSettings extends Shape
{
    /**
     * @param array{
     *     InputLossAction?: 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM'|null,
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL'|null,
     *     TimedMetadataId3Period?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
