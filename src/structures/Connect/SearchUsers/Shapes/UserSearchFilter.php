<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneTagFilter $TagFilter
 * @property ControlPlaneUserAttributeFilter $UserAttributeFilter
 */
class UserSearchFilter extends Shape
{
    /**
     * @param array{
     *     TagFilter?: ControlPlaneTagFilter,
     *     UserAttributeFilter?: ControlPlaneUserAttributeFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
