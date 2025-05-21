<?php

namespace Sunaoka\Aws\Structures\QBusiness\CancelSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $subscriptionId
 */
class CancelSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     subscriptionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
