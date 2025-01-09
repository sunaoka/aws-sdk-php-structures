<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightsTarget
 */
class KinesisDataStreamSinkConfiguration extends Shape
{
    /**
     * @param array{InsightsTarget?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
