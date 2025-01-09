<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class BillingGroupMetadata extends Shape
{
    /**
     * @param array{creationDate?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
