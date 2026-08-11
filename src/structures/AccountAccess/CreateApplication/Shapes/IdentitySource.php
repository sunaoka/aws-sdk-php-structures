<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenter|null $identityCenter
 */
class IdentitySource extends Shape
{
    /**
     * @param array{identityCenter?: IdentityCenter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
