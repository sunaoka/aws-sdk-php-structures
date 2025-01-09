<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecordingStreamConfiguration> $Streams
 * @property FragmentSelector $FragmentSelector
 */
class KinesisVideoStreamRecordingSourceRuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     Streams: list<RecordingStreamConfiguration>,
     *     FragmentSelector: FragmentSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
