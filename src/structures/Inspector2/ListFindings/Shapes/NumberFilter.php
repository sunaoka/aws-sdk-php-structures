<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $lowerInclusive
 * @property double $upperInclusive
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     lowerInclusive?: double,
     *     upperInclusive?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
