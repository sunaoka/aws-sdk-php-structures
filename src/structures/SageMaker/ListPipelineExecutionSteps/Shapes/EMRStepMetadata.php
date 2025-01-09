<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterId
 * @property string $StepId
 * @property string $StepName
 * @property string $LogFilePath
 */
class EMRStepMetadata extends Shape
{
    /**
     * @param array{
     *     ClusterId?: string,
     *     StepId?: string,
     *     StepName?: string,
     *     LogFilePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
