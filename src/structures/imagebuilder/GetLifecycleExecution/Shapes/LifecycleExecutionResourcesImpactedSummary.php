<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecycleExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $hasImpactedResources
 */
class LifecycleExecutionResourcesImpactedSummary extends Shape
{
    /**
     * @param array{hasImpactedResources?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
