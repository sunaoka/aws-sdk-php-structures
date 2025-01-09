<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecycleExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $hasImpactedResources
 */
class LifecycleExecutionResourcesImpactedSummary extends Shape
{
    /**
     * @param array{hasImpactedResources?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
