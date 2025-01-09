<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HyperParameterTuningJobName
 */
class ParentHyperParameterTuningJob extends Shape
{
    /**
     * @param array{HyperParameterTuningJobName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
