<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightsTarget
 */
class LambdaFunctionSinkConfiguration extends Shape
{
    /**
     * @param array{InsightsTarget?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
