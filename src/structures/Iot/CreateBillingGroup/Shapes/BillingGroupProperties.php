<?php

namespace Sunaoka\Aws\Structures\Iot\CreateBillingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $billingGroupDescription
 */
class BillingGroupProperties extends Shape
{
    /**
     * @param array{billingGroupDescription?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
