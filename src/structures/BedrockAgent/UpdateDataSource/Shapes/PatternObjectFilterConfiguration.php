<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PatternObjectFilter> $filters
 */
class PatternObjectFilterConfiguration extends Shape
{
    /**
     * @param array{filters: list<PatternObjectFilter>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
