<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaCapturePipeline|null $MediaCapturePipeline
 * @property MediaLiveConnectorPipeline|null $MediaLiveConnectorPipeline
 * @property MediaConcatenationPipeline|null $MediaConcatenationPipeline
 * @property MediaInsightsPipeline|null $MediaInsightsPipeline
 * @property MediaStreamPipeline|null $MediaStreamPipeline
 */
class MediaPipeline extends Shape
{
    /**
     * @param array{
     *     MediaCapturePipeline?: MediaCapturePipeline|null,
     *     MediaLiveConnectorPipeline?: MediaLiveConnectorPipeline|null,
     *     MediaConcatenationPipeline?: MediaConcatenationPipeline|null,
     *     MediaInsightsPipeline?: MediaInsightsPipeline|null,
     *     MediaStreamPipeline?: MediaStreamPipeline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
