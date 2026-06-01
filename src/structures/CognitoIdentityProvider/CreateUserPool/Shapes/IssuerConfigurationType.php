<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORIGINAL'|'UPDATED'|null $Type
 */
class IssuerConfigurationType extends Shape
{
    /**
     * @param array{Type?: 'ORIGINAL'|'UPDATED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
