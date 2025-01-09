<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled' $Mode
 */
class Autotune extends Shape
{
    /**
     * @param array{Mode: 'Enabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
