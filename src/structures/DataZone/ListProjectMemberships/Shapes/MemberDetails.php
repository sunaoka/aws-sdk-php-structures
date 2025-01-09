<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroupDetails $group
 * @property UserDetails $user
 */
class MemberDetails extends Shape
{
    /**
     * @param array{
     *     group?: GroupDetails,
     *     user?: UserDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
