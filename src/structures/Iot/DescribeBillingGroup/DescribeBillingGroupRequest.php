<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 */
class DescribeBillingGroupRequest extends Request
{
    /**
     * @param array{billingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
