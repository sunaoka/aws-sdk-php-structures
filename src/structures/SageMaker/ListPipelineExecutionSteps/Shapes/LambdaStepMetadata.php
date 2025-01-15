<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<OutputParameter>|null $OutputParameters
 */
class LambdaStepMetadata extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     OutputParameters?: list<OutputParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
