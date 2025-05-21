<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subscriptionId
 * @property string|null $subscriptionArn
 * @property SubscriptionPrincipal|null $principal
 * @property SubscriptionDetails|null $currentSubscription
 * @property SubscriptionDetails|null $nextSubscription
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     subscriptionId?: string|null,
     *     subscriptionArn?: string|null,
     *     principal?: SubscriptionPrincipal|null,
     *     currentSubscription?: SubscriptionDetails|null,
     *     nextSubscription?: SubscriptionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
