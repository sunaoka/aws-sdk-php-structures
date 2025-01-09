<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $externalExecutionId
 * @property string $externalExecutionSummary
 * @property string $externalExecutionUrl
 * @property ErrorDetails $errorDetails
 * @property string $logStreamARN
 */
class ActionExecutionResult extends Shape
{
    /**
     * @param array{
     *     externalExecutionId?: string,
     *     externalExecutionSummary?: string,
     *     externalExecutionUrl?: string,
     *     errorDetails?: ErrorDetails,
     *     logStreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
