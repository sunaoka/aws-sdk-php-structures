<?php

namespace Sunaoka\Aws\Structures\Chime\AssociateSigninDelegateGroupsWithAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 */
class SigninDelegateGroup extends Shape
{
    /**
     * @param array{GroupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
