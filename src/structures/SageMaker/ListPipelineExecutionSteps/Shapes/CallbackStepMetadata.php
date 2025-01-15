<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CallbackToken
 * @property string|null $SqsQueueUrl
 * @property list<OutputParameter>|null $OutputParameters
 */
class CallbackStepMetadata extends Shape
{
    /**
     * @param array{
     *     CallbackToken?: string|null,
     *     SqsQueueUrl?: string|null,
     *     OutputParameters?: list<OutputParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
