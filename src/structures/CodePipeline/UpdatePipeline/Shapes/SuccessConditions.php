<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Condition> $conditions
 */
class SuccessConditions extends Shape
{
    /**
     * @param array{conditions: list<Condition>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
