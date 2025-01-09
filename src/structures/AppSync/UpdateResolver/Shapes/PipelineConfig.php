<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $functions
 */
class PipelineConfig extends Shape
{
    /**
     * @param array{functions?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
