<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $principalEntityType
 */
class IdentitySourceFilter extends Shape
{
    /**
     * @param array{principalEntityType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
