<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $externalExecutionId
 * @property string $externalExecutionSummary
 * @property string $externalExecutionUrl
 * @property ErrorDetails $errorDetails
 */
class RuleExecutionResult extends Shape
{
    /**
     * @param array{
     *     externalExecutionId?: string,
     *     externalExecutionSummary?: string,
     *     externalExecutionUrl?: string,
     *     errorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
