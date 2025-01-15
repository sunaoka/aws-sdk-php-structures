<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $externalExecutionId
 * @property string|null $externalExecutionSummary
 * @property string|null $externalExecutionUrl
 * @property ErrorDetails|null $errorDetails
 * @property string|null $logStreamARN
 */
class ActionExecutionResult extends Shape
{
    /**
     * @param array{
     *     externalExecutionId?: string|null,
     *     externalExecutionSummary?: string|null,
     *     externalExecutionUrl?: string|null,
     *     errorDetails?: ErrorDetails|null,
     *     logStreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
