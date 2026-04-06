<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserMetadata|null $user
 */
class MemberMetadata extends Shape
{
    /**
     * @param array{user?: UserMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
