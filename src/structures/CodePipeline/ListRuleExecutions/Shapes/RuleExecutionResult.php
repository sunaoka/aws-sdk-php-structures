<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $externalExecutionId
 * @property string|null $externalExecutionSummary
 * @property string|null $externalExecutionUrl
 * @property ErrorDetails|null $errorDetails
 */
class RuleExecutionResult extends Shape
{
    /**
     * @param array{
     *     externalExecutionId?: string|null,
     *     externalExecutionSummary?: string|null,
     *     externalExecutionUrl?: string|null,
     *     errorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
