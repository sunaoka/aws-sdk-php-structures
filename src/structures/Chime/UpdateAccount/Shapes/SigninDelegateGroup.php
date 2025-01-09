<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 */
class SigninDelegateGroup extends Shape
{
    /**
     * @param array{GroupName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
