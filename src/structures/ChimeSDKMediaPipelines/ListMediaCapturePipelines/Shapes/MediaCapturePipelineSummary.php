<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaCapturePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 */
class MediaCapturePipelineSummary extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
