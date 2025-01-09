<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DescribeAccountSubscriptionRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
