<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateSubscription;

use Sunaoka\Aws\Structures\Response;

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
class CreateSubscriptionResponse extends Response
{
}
