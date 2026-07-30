<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\CreateSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $planFamily
 * @property string $planTier
 * @property string|null $usageLevel
 * @property ScheduledChange|null $scheduledChange
 * @property 'PENDING_APPROVAL'|'ACTIVE'|'SYNC_IN_PROGRESS'|'FAILED' $status
 * @property string|null $statusReason
 * @property list<string> $resourceArns
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     planFamily: string,
     *     planTier: string,
     *     usageLevel?: string|null,
     *     scheduledChange?: ScheduledChange|null,
     *     status: 'PENDING_APPROVAL'|'ACTIVE'|'SYNC_IN_PROGRESS'|'FAILED',
     *     statusReason?: string|null,
     *     resourceArns: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
