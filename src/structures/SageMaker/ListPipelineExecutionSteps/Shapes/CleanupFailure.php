<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepName
 * @property 'ClientError'|'InternalFailure'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class CleanupFailure extends Shape
{
    /**
     * @param array{
     *     StepName?: string|null,
     *     ErrorCode?: 'ClientError'|'InternalFailure'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
