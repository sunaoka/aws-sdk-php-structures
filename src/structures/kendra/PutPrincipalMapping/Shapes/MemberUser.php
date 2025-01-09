<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 */
class MemberUser extends Shape
{
    /**
     * @param array{UserId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
