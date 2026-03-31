<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMBER'|null $role
 */
class UserConfig extends Shape
{
    /**
     * @param array{role?: 'MEMBER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
