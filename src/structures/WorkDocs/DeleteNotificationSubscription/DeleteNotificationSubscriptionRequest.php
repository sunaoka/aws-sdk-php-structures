<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteNotificationSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionId
 * @property string $OrganizationId
 */
class DeleteNotificationSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     SubscriptionId: string,
     *     OrganizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
