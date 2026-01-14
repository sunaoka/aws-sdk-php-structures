<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedProject|null $project
 * @property SubscribedUser|null $user
 * @property SubscribedGroup|null $group
 * @property SubscribedIamPrincipal|null $iam
 */
class SubscribedPrincipal extends Shape
{
    /**
     * @param array{
     *     project?: SubscribedProject|null,
     *     user?: SubscribedUser|null,
     *     group?: SubscribedGroup|null,
     *     iam?: SubscribedIamPrincipal|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
