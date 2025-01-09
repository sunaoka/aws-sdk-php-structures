<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Disabled'|'Enabled' $CompleteOnConvergence
 */
class ConvergenceDetected extends Shape
{
    /**
     * @param array{CompleteOnConvergence?: 'Disabled'|'Enabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
