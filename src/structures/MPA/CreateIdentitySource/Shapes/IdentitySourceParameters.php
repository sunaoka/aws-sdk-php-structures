<?php

namespace Sunaoka\Aws\Structures\MPA\CreateIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamIdentityCenter|null $IamIdentityCenter
 */
class IdentitySourceParameters extends Shape
{
    /**
     * @param array{IamIdentityCenter?: IamIdentityCenter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
