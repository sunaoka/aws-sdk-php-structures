<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 30>|null $SegmentDurationSeconds
 * @property string|null $SegmentName
 * @property bool|null $TsUseAudioRenditionGroup
 * @property bool|null $IncludeIframeOnlyStreams
 * @property bool|null $TsIncludeDvbSubtitles
 * @property Scte|null $Scte
 * @property Encryption|null $Encryption
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
     *     Encryption?: Encryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
