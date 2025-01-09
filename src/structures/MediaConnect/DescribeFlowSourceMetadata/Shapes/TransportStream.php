<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Channels
 * @property string $Codec
 * @property string $FrameRate
 * @property FrameResolution $FrameResolution
 * @property int $Pid
 * @property int $SampleRate
 * @property int $SampleSize
 * @property string $StreamType
 */
class TransportStream extends Shape
{
    /**
     * @param array{
     *     Channels?: int,
     *     Codec?: string,
     *     FrameRate?: string,
     *     FrameResolution?: FrameResolution,
     *     Pid: int,
     *     SampleRate?: int,
     *     SampleSize?: int,
     *     StreamType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
