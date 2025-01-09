<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaCapturePipeline $MediaCapturePipeline
 * @property MediaLiveConnectorPipeline $MediaLiveConnectorPipeline
 * @property MediaConcatenationPipeline $MediaConcatenationPipeline
 * @property MediaInsightsPipeline $MediaInsightsPipeline
 * @property MediaStreamPipeline $MediaStreamPipeline
 */
class MediaPipeline extends Shape
{
    /**
     * @param array{
     *     MediaCapturePipeline?: MediaCapturePipeline,
     *     MediaLiveConnectorPipeline?: MediaLiveConnectorPipeline,
     *     MediaConcatenationPipeline?: MediaConcatenationPipeline,
     *     MediaInsightsPipeline?: MediaInsightsPipeline,
     *     MediaStreamPipeline?: MediaStreamPipeline
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
