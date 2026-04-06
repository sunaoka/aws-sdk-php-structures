<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamType
 * @property string $Codec
 * @property int $StreamId
 * @property 'progressive'|'interlace'|'progressive-segmented-frame'|null $ScanMode
 * @property FrameResolution|null $FrameResolution
 * @property string|null $FrameRate
 * @property int|null $Channels
 * @property int|null $SampleRate
 */
class NdiMediaStreamInfo extends Shape
{
    /**
     * @param array{
     *     StreamType: string,
     *     Codec: string,
     *     StreamId: int,
     *     ScanMode?: 'progressive'|'interlace'|'progressive-segmented-frame'|null,
     *     FrameResolution?: FrameResolution|null,
     *     FrameRate?: string|null,
     *     Channels?: int|null,
     *     SampleRate?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
