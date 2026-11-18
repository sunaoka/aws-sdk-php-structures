<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JwtIssuer>|null $issuers
 * @property list<'RS256'|'RS384'|'RS512'|'ES256'|'ES384'|'ES512'>|null $defaultAlgorithms
 */
class JwtConfiguration extends Shape
{
    /**
     * @param array{
     *     issuers?: list<JwtIssuer>|null,
     *     defaultAlgorithms?: list<'RS256'|'RS384'|'RS512'|'ES256'|'ES384'|'ES512'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
