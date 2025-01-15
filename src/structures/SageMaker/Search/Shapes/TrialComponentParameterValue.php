<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property double|null $NumberValue
 */
class TrialComponentParameterValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     NumberValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
