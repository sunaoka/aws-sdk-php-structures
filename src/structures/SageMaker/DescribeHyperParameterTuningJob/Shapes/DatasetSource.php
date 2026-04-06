<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetArn
 */
class DatasetSource extends Shape
{
    /**
     * @param array{DatasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
