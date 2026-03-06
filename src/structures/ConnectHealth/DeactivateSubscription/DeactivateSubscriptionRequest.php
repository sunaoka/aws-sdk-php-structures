<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\DeactivateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $subscriptionId
 */
class DeactivateSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     subscriptionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
