<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateNotificationSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Endpoint
 * @property 'HTTPS'|'SQS' $Protocol
 * @property 'ALL' $SubscriptionType
 */
class CreateNotificationSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Endpoint: string,
     *     Protocol: 'HTTPS'|'SQS',
     *     SubscriptionType: 'ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
