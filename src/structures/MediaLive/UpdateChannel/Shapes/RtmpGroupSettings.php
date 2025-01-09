<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ON_CUE_POINT_SCTE35'> $AdMarkers
 * @property 'AKAMAI'|'COMMON' $AuthenticationScheme
 * @property 'DISCONNECT_IMMEDIATELY'|'WAIT_FOR_SERVER' $CacheFullBehavior
 * @property int $CacheLength
 * @property 'ALL'|'FIELD1_608'|'FIELD1_AND_FIELD2_608' $CaptionData
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT' $InputLossAction
 * @property int $RestartDelay
 * @property 'AUTO'|'DROP'|'INCLUDE' $IncludeFillerNalUnits
 */
class RtmpGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ON_CUE_POINT_SCTE35'>,
     *     AuthenticationScheme?: 'AKAMAI'|'COMMON',
     *     CacheFullBehavior?: 'DISCONNECT_IMMEDIATELY'|'WAIT_FOR_SERVER',
     *     CacheLength?: int,
     *     CaptionData?: 'ALL'|'FIELD1_608'|'FIELD1_AND_FIELD2_608',
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT',
     *     RestartDelay?: int,
     *     IncludeFillerNalUnits?: 'AUTO'|'DROP'|'INCLUDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
