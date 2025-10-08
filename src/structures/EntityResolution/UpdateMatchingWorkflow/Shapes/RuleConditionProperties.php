<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleCondition> $rules
 */
class RuleConditionProperties extends Shape
{
    /**
     * @param array{rules: list<RuleCondition>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
