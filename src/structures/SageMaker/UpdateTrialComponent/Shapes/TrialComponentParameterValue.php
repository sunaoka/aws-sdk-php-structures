<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StringValue
 * @property double $NumberValue
 */
class TrialComponentParameterValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string,
     *     NumberValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
