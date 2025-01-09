<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM' $InputLossAction
 * @property 'NONE'|'PRIV'|'TDRL' $TimedMetadataId3Frame
 * @property int<0, max> $TimedMetadataId3Period
 */
class UdpGroupSettings extends Shape
{
    /**
     * @param array{
     *     InputLossAction?: 'DROP_PROGRAM'|'DROP_TS'|'EMIT_PROGRAM',
     *     TimedMetadataId3Frame?: 'NONE'|'PRIV'|'TDRL',
     *     TimedMetadataId3Period?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
