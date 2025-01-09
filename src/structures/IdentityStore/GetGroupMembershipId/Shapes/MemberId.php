<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupMembershipId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 */
class MemberId extends Shape
{
    /**
     * @param array{UserId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
