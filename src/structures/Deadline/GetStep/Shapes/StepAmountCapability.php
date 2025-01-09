<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property double $min
 * @property double $max
 * @property double $value
 */
class StepAmountCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     min?: double,
     *     max?: double,
     *     value?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
