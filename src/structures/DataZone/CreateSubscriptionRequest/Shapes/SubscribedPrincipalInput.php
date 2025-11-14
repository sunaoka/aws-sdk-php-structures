<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedGroupInput|null $group
 * @property SubscribedProjectInput|null $project
 * @property SubscribedUserInput|null $user
 */
class SubscribedPrincipalInput extends Shape
{
    /**
     * @param array{
     *     group?: SubscribedGroupInput|null,
     *     project?: SubscribedProjectInput|null,
     *     user?: SubscribedUserInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
