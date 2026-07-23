<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 30>|null $SegmentDurationSeconds
 * @property string|null $SegmentName
 * @property bool|null $TsUseAudioRenditionGroup
 * @property bool|null $IncludeIframeOnlyStreams
 * @property bool|null $TsIncludeDvbSubtitles
 * @property Scte|null $Scte
 * @property Encryption|null $Encryption
 * @property 'PASSTHROUGH'|'REBASED_TO_CHANNEL_START'|null $OutputTimestampMode
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     SegmentDurationSeconds?: int<1, 30>|null,
     *     SegmentName?: string|null,
     *     TsUseAudioRenditionGroup?: bool|null,
     *     IncludeIframeOnlyStreams?: bool|null,
     *     TsIncludeDvbSubtitles?: bool|null,
     *     Scte?: Scte|null,
     *     Encryption?: Encryption|null,
     *     OutputTimestampMode?: 'PASSTHROUGH'|'REBASED_TO_CHANNEL_START'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
