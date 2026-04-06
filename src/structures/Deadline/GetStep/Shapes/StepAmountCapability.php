<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $max
 * @property double|null $min
 * @property string $name
 * @property double|null $value
 */
class StepAmountCapability extends Shape
{
    /**
     * @param array{
     *     max?: double|null,
     *     min?: double|null,
     *     name: string,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
