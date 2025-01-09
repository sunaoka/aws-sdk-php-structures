<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'ID_ALREADY_IN_USE'|'OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED'|'LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED'|'LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION' $cause
 * @property int $decisionTaskCompletedEventId
 */
class ScheduleLambdaFunctionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     cause: 'ID_ALREADY_IN_USE'|'OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED'|'LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED'|'LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
