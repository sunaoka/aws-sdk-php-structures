<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportSubscriptionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $planName
 * @property \Aws\Api\DateTimeResult $contractStartDate
 * @property \Aws\Api\DateTimeResult $contractEndDate
 */
class BusinessSupportSubscriptionContract extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     planName: string,
     *     contractStartDate: \Aws\Api\DateTimeResult,
     *     contractEndDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
