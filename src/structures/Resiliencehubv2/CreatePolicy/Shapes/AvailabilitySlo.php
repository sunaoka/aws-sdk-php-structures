<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $target
 */
class AvailabilitySlo extends Shape
{
    /**
     * @param array{target?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
