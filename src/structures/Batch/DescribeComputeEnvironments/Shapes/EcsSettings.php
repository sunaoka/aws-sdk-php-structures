<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENHANCED'|'DISABLED'|null $containerInsights
 */
class EcsSettings extends Shape
{
    /**
     * @param array{containerInsights?: 'ENABLED'|'ENHANCED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
