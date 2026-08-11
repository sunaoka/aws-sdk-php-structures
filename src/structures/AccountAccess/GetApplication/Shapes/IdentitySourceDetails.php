<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterDetails|null $identityCenter
 */
class IdentitySourceDetails extends Shape
{
    /**
     * @param array{identityCenter?: IdentityCenterDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
