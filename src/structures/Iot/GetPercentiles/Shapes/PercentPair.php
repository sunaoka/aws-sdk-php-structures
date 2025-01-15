<?php

namespace Sunaoka\Aws\Structures\Iot\GetPercentiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $percent
 * @property double|null $value
 */
class PercentPair extends Shape
{
    /**
     * @param array{
     *     percent?: double|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
