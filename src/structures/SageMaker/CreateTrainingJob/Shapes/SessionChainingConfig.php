<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableSessionTagChaining
 */
class SessionChainingConfig extends Shape
{
    /**
     * @param array{EnableSessionTagChaining?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
