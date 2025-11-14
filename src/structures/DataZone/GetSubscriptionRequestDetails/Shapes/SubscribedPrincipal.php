<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedGroup|null $group
 * @property SubscribedProject|null $project
 * @property SubscribedUser|null $user
 */
class SubscribedPrincipal extends Shape
{
    /**
     * @param array{
     *     group?: SubscribedGroup|null,
     *     project?: SubscribedProject|null,
     *     user?: SubscribedUser|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
