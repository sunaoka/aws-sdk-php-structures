<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HyperParameterTuningJobName
 */
class ParentHyperParameterTuningJob extends Shape
{
    /**
     * @param array{HyperParameterTuningJobName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
