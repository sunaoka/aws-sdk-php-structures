<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Disabled'|'Enabled'|null $CompleteOnConvergence
 */
class ConvergenceDetected extends Shape
{
    /**
     * @param array{CompleteOnConvergence?: 'Disabled'|'Enabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
