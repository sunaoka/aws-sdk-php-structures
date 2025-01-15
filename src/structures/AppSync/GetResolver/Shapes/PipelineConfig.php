<?php

namespace Sunaoka\Aws\Structures\AppSync\GetResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $functions
 */
class PipelineConfig extends Shape
{
    /**
     * @param array{functions?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
