<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AuthorizedTokenIssuer>|null $AuthorizedTokenIssuers
 */
class JwtBearerGrant extends Shape
{
    /**
     * @param array{AuthorizedTokenIssuers?: list<AuthorizedTokenIssuer>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
