<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserDetails|null $user
 * @property GroupDetails|null $group
 */
class MemberDetails extends Shape
{
    /**
     * @param array{
     *     user?: UserDetails|null,
     *     group?: GroupDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
