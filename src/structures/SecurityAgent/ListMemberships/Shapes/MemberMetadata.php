<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserMetadata|null $user
 * @property GroupMetadata|null $group
 */
class MemberMetadata extends Shape
{
    /**
     * @param array{
     *     user?: UserMetadata|null,
     *     group?: GroupMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
