<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleExecutionResult|null $executionResult
 */
class RuleExecutionOutput extends Shape
{
    /**
     * @param array{executionResult?: RuleExecutionResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
