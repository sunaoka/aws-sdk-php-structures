<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property USD|null $AmountInUsd
 */
class PublicWorkforceTaskPrice extends Shape
{
    /**
     * @param array{AmountInUsd?: USD|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
