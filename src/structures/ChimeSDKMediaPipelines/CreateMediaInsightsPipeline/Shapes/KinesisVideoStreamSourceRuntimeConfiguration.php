<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StreamConfiguration> $Streams
 * @property 'pcm' $MediaEncoding
 * @property int $MediaSampleRate
 */
class KinesisVideoStreamSourceRuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     Streams: list<StreamConfiguration>,
     *     MediaEncoding: 'pcm',
     *     MediaSampleRate: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
