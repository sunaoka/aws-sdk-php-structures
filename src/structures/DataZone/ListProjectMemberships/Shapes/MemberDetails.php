<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroupDetails|null $group
 * @property UserDetails|null $user
 */
class MemberDetails extends Shape
{
    /**
     * @param array{
     *     group?: GroupDetails|null,
     *     user?: UserDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
