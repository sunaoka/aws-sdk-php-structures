<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdentityAttributeName
 */
class UserIdentityConfiguration extends Shape
{
    /**
     * @param array{IdentityAttributeName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
