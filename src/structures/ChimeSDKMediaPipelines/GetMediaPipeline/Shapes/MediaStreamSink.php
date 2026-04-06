<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SinkArn
 * @property 'KinesisVideoStreamPool' $SinkType
 * @property int<1, 10> $ReservedStreamCapacity
 * @property 'MixedAudio'|'IndividualAudio' $MediaStreamType
 */
class MediaStreamSink extends Shape
{
    /**
     * @param array{
     *     SinkArn: string,
     *     SinkType: 'KinesisVideoStreamPool',
     *     ReservedStreamCapacity: int<1, 10>,
     *     MediaStreamType: 'MixedAudio'|'IndividualAudio'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
