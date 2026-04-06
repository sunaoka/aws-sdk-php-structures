<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $upperInclusive
 * @property double|null $lowerInclusive
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     upperInclusive?: double|null,
     *     lowerInclusive?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
