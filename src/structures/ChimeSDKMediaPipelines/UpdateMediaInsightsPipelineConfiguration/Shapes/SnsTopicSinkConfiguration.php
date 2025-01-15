<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InsightsTarget
 */
class SnsTopicSinkConfiguration extends Shape
{
    /**
     * @param array{InsightsTarget?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
