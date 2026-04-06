<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ON_CUE_POINT_SCTE35'>|null $AdMarkers
 * @property 'AKAMAI'|'COMMON'|null $AuthenticationScheme
 * @property 'DISCONNECT_IMMEDIATELY'|'WAIT_FOR_SERVER'|null $CacheFullBehavior
 * @property int<30, max>|null $CacheLength
 * @property 'ALL'|'FIELD1_608'|'FIELD1_AND_FIELD2_608'|null $CaptionData
 * @property 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null $InputLossAction
 * @property int<0, max>|null $RestartDelay
 * @property 'AUTO'|'DROP'|'INCLUDE'|null $IncludeFillerNalUnits
 */
class RtmpGroupSettings extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: list<'ON_CUE_POINT_SCTE35'>|null,
     *     AuthenticationScheme?: 'AKAMAI'|'COMMON'|null,
     *     CacheFullBehavior?: 'DISCONNECT_IMMEDIATELY'|'WAIT_FOR_SERVER'|null,
     *     CacheLength?: int<30, max>|null,
     *     CaptionData?: 'ALL'|'FIELD1_608'|'FIELD1_AND_FIELD2_608'|null,
     *     InputLossAction?: 'EMIT_OUTPUT'|'PAUSE_OUTPUT'|null,
     *     RestartDelay?: int<0, max>|null,
     *     IncludeFillerNalUnits?: 'AUTO'|'DROP'|'INCLUDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
