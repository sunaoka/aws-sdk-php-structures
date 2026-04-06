<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ActivateSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $subscriptionId
 */
class ActivateSubscriptionRequest extends Request
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
