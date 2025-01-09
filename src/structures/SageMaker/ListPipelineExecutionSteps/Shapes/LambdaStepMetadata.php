<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<OutputParameter> $OutputParameters
 */
class LambdaStepMetadata extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     OutputParameters?: list<OutputParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
