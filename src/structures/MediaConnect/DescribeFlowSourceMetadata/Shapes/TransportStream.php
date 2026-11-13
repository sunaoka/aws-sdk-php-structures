<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Channels
 * @property string|null $Codec
 * @property ColorInformation|null $Color
 * @property string|null $FrameRate
 * @property FrameResolution|null $FrameResolution
 * @property int $Pid
 * @property int|null $SampleRate
 * @property int|null $SampleSize
 * @property 'progressive'|'interlace'|'progressive-segmented-frame'|null $ScanMode
 * @property string $StreamType
 * @property string|null $Language
 */
class TransportStream extends Shape
{
    /**
     * @param array{
     *     Channels?: int|null,
     *     Codec?: string|null,
     *     Color?: ColorInformation|null,
     *     FrameRate?: string|null,
     *     FrameResolution?: FrameResolution|null,
     *     Pid: int,
     *     SampleRate?: int|null,
     *     SampleSize?: int|null,
     *     ScanMode?: 'progressive'|'interlace'|'progressive-segmented-frame'|null,
     *     StreamType: string,
     *     Language?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
