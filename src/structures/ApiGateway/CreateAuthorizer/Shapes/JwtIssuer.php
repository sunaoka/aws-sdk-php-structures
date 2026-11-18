<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $issuer
 * @property list<string>|null $audiences
 * @property list<JwtAdditionalClaim>|null $additionalClaims
 * @property string|null $jwksUri
 */
class JwtIssuer extends Shape
{
    /**
     * @param array{
     *     issuer?: string|null,
     *     audiences?: list<string>|null,
     *     additionalClaims?: list<JwtAdditionalClaim>|null,
     *     jwksUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
