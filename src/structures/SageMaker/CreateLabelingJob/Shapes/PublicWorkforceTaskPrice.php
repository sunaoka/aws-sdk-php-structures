<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property USD $AmountInUsd
 */
class PublicWorkforceTaskPrice extends Shape
{
    /**
     * @param array{AmountInUsd?: USD} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
