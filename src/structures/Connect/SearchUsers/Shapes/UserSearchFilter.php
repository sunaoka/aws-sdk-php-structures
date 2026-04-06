<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneTagFilter|null $TagFilter
 * @property ControlPlaneUserAttributeFilter|null $UserAttributeFilter
 */
class UserSearchFilter extends Shape
{
    /**
     * @param array{
     *     TagFilter?: ControlPlaneTagFilter|null,
     *     UserAttributeFilter?: ControlPlaneUserAttributeFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
