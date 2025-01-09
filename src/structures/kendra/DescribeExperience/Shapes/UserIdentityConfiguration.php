<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityAttributeName
 */
class UserIdentityConfiguration extends Shape
{
    /**
     * @param array{IdentityAttributeName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
