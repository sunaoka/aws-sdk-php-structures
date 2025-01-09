<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnnotationConsolidationLambdaArn
 */
class AnnotationConsolidationConfig extends Shape
{
    /**
     * @param array{AnnotationConsolidationLambdaArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
