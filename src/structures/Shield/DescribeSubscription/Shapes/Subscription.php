<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<0, max> $TimeCommitmentInSeconds
 * @property 'ENABLED'|'DISABLED' $AutoRenew
 * @property list<Limit> $Limits
 * @property 'ENABLED'|'DISABLED'|'PENDING' $ProactiveEngagementStatus
 * @property SubscriptionLimits $SubscriptionLimits
 * @property string $SubscriptionArn
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     TimeCommitmentInSeconds?: int<0, max>,
     *     AutoRenew?: 'ENABLED'|'DISABLED',
     *     Limits?: list<Limit>,
     *     ProactiveEngagementStatus?: 'ENABLED'|'DISABLED'|'PENDING',
     *     SubscriptionLimits: SubscriptionLimits,
     *     SubscriptionArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
