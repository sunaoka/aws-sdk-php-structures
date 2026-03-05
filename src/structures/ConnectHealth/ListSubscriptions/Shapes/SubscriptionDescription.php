<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $subscriptionId
 * @property string $arn
 * @property 'ACTIVE'|'INACTIVE'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $activatedAt
 * @property \Aws\Api\DateTimeResult|null $deactivatedAt
 */
class SubscriptionDescription extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     subscriptionId: string,
     *     arn: string,
     *     status: 'ACTIVE'|'INACTIVE'|'DELETED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     activatedAt?: \Aws\Api\DateTimeResult|null,
     *     deactivatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
