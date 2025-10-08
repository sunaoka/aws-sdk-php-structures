<?php

namespace Sunaoka\Aws\Structures\MPA\GetIdentitySource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamIdentityCenterForGet|null $IamIdentityCenter
 */
class IdentitySourceParametersForGet extends Shape
{
    /**
     * @param array{IamIdentityCenter?: IamIdentityCenterForGet|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
