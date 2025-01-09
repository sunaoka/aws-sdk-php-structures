<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AuthorizedTokenIssuer> $AuthorizedTokenIssuers
 */
class JwtBearerGrant extends Shape
{
    /**
     * @param array{AuthorizedTokenIssuers?: list<AuthorizedTokenIssuer>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
