<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $RedirectUris
 */
class AuthorizationCodeGrant extends Shape
{
    /**
     * @param array{RedirectUris?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
