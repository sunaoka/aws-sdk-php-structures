<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StreamId
 * @property 'VIDEO'|'AUDIO'|'DATA'|'UNKNOWN' $StreamType
 * @property string $Codec
 * @property string|null $FrameRate
 * @property FrameResolution|null $FrameResolution
 * @property 'progressive'|'interlace'|'progressive-segmented-frame'|null $ScanMode
 * @property ColorInformation|null $Color
 * @property int|null $Channels
 * @property int|null $SampleRate
 * @property int|null $SampleSize
 * @property string|null $Language
 */
class RtmpMediaStreamInfo extends Shape
{
    /**
     * @param array{
     *     StreamId: int,
     *     StreamType: 'VIDEO'|'AUDIO'|'DATA'|'UNKNOWN',
     *     Codec: string,
     *     FrameRate?: string|null,
     *     FrameResolution?: FrameResolution|null,
     *     ScanMode?: 'progressive'|'interlace'|'progressive-segmented-frame'|null,
     *     Color?: ColorInformation|null,
     *     Channels?: int|null,
     *     SampleRate?: int|null,
     *     SampleSize?: int|null,
     *     Language?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
