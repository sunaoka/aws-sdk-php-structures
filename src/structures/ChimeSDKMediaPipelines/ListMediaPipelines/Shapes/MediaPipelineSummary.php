<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaPipelineId
 * @property string|null $MediaPipelineArn
 */
class MediaPipelineSummary extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string|null,
     *     MediaPipelineArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
