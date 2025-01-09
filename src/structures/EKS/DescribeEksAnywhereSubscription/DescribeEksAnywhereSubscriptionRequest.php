<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeEksAnywhereSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeEksAnywhereSubscriptionRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
