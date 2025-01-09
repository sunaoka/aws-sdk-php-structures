<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleExecutionResult $executionResult
 */
class RuleExecutionOutput extends Shape
{
    /**
     * @param array{executionResult?: RuleExecutionResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
