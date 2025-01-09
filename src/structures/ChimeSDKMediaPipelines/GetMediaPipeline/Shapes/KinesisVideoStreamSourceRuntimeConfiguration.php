<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StreamConfiguration> $Streams
 * @property 'pcm' $MediaEncoding
 * @property int<8000, 48000> $MediaSampleRate
 */
class KinesisVideoStreamSourceRuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     Streams: list<StreamConfiguration>,
     *     MediaEncoding: 'pcm',
     *     MediaSampleRate: int<8000, 48000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
