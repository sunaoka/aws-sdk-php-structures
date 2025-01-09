<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalEntityType
 */
class IdentitySourceFilter extends Shape
{
    /**
     * @param array{principalEntityType?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
