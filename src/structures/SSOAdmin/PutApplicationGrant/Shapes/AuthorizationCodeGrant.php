<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $RedirectUris
 */
class AuthorizationCodeGrant extends Shape
{
    /**
     * @param array{RedirectUris?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
