<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableInfraCheck
 */
class InfraCheckConfig extends Shape
{
    /**
     * @param array{EnableInfraCheck?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
