<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroupMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 */
class MemberId extends Shape
{
    /**
     * @param array{UserId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
