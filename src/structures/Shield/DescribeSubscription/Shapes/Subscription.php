<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<0, max>|null $TimeCommitmentInSeconds
 * @property 'ENABLED'|'DISABLED'|null $AutoRenew
 * @property list<Limit>|null $Limits
 * @property 'ENABLED'|'DISABLED'|'PENDING'|null $ProactiveEngagementStatus
 * @property SubscriptionLimits $SubscriptionLimits
 * @property string|null $SubscriptionArn
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TimeCommitmentInSeconds?: int<0, max>|null,
     *     AutoRenew?: 'ENABLED'|'DISABLED'|null,
     *     Limits?: list<Limit>|null,
     *     ProactiveEngagementStatus?: 'ENABLED'|'DISABLED'|'PENDING'|null,
     *     SubscriptionLimits: SubscriptionLimits,
     *     SubscriptionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
