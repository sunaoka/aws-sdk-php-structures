<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallbackToken
 * @property string $SqsQueueUrl
 * @property list<OutputParameter> $OutputParameters
 */
class CallbackStepMetadata extends Shape
{
    /**
     * @param array{
     *     CallbackToken?: string,
     *     SqsQueueUrl?: string,
     *     OutputParameters?: list<OutputParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
