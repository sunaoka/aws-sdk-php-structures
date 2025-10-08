<?php

namespace Sunaoka\Aws\Structures\MPA\ListIdentitySources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamIdentityCenterForList|null $IamIdentityCenter
 */
class IdentitySourceParametersForList extends Shape
{
    /**
     * @param array{IamIdentityCenter?: IamIdentityCenterForList|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
