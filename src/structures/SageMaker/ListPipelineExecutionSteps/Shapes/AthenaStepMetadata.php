<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryExecutionId
 * @property string|null $S3OutputLocation
 */
class AthenaStepMetadata extends Shape
{
    /**
     * @param array{
     *     QueryExecutionId?: string|null,
     *     S3OutputLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
