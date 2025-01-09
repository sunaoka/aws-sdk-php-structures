<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $configuration
 */
class ActionConfiguration extends Shape
{
    /**
     * @param array{configuration?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
