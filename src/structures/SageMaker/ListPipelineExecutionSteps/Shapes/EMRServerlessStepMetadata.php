<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $JobRunId
 * @property string|null $JobRunName
 * @property string|null $LogFilePath
 */
class EMRServerlessStepMetadata extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     JobRunId?: string|null,
     *     JobRunName?: string|null,
     *     LogFilePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
