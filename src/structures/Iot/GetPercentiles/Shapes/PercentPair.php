<?php

namespace Sunaoka\Aws\Structures\Iot\GetPercentiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $percent
 * @property double $value
 */
class PercentPair extends Shape
{
    /**
     * @param array{
     *     percent?: double,
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
