<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterId
 * @property string|null $StepId
 * @property string|null $StepName
 * @property string|null $LogFilePath
 */
class EMRStepMetadata extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string|null,
     *     StepId?: string|null,
     *     StepName?: string|null,
     *     LogFilePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
