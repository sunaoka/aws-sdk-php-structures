<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Channels
 * @property string|null $Codec
 * @property string|null $FrameRate
 * @property FrameResolution|null $FrameResolution
 * @property int $Pid
 * @property int|null $SampleRate
 * @property int|null $SampleSize
 * @property string $StreamType
 */
class TransportStream extends Shape
{
    /**
     * @param array{
     *     Channels?: int|null,
     *     Codec?: string|null,
     *     FrameRate?: string|null,
     *     FrameResolution?: FrameResolution|null,
     *     Pid: int,
     *     SampleRate?: int|null,
     *     SampleSize?: int|null,
     *     StreamType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
