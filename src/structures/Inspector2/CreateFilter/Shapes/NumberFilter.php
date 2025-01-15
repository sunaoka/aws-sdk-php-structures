<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $lowerInclusive
 * @property double|null $upperInclusive
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     lowerInclusive?: double|null,
     *     upperInclusive?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
