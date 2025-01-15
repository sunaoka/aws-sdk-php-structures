<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property double|null $min
 * @property double|null $max
 * @property double|null $value
 */
class StepAmountCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     min?: double|null,
     *     max?: double|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
