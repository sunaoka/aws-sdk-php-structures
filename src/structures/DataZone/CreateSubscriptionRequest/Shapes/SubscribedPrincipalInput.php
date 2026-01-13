<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedProjectInput|null $project
 * @property SubscribedUserInput|null $user
 * @property SubscribedGroupInput|null $group
 * @property SubscribedIamPrincipalInput|null $iam
 */
class SubscribedPrincipalInput extends Shape
{
    /**
     * @param array{
     *     project?: SubscribedProjectInput|null,
     *     user?: SubscribedUserInput|null,
     *     group?: SubscribedGroupInput|null,
     *     iam?: SubscribedIamPrincipalInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
