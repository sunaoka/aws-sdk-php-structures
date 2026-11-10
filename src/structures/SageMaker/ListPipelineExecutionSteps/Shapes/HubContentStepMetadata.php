<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HubArn
 * @property string|null $HubContentArn
 */
class HubContentStepMetadata extends Shape
{
    /**
     * @param array{
     *     HubArn?: string|null,
     *     HubContentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
