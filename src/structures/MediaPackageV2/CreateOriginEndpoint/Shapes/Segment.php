<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SegmentDurationSeconds
 * @property string $SegmentName
 * @property bool $TsUseAudioRenditionGroup
 * @property bool $IncludeIframeOnlyStreams
 * @property bool $TsIncludeDvbSubtitles
 * @property Scte $Scte
 * @property Encryption $Encryption
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     SegmentDurationSeconds?: int,
     *     SegmentName?: string,
     *     TsUseAudioRenditionGroup?: bool,
     *     IncludeIframeOnlyStreams?: bool,
     *     TsIncludeDvbSubtitles?: bool,
     *     Scte?: Scte,
     *     Encryption?: Encryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
