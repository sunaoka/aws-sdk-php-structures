<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property list<string> $audiences
 * @property list<JwtAdditionalClaim>|null $additionalClaims
 */
class JwtIssuerInput extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     audiences: list<string>,
     *     additionalClaims?: list<JwtAdditionalClaim>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
