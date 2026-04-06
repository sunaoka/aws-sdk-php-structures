<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Number
 */
class ContactMetricValue extends Shape
{
    /**
     * @param array{Number?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
