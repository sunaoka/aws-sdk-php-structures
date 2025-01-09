<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $billingGroupDescription
 */
class BillingGroupProperties extends Shape
{
    /**
     * @param array{billingGroupDescription?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
