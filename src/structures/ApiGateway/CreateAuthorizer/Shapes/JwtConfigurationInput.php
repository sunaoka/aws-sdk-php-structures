<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateAuthorizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JwtIssuerInput> $issuers
 * @property list<'RS256'|'RS384'|'RS512'|'ES256'|'ES384'|'ES512'> $defaultAlgorithms
 */
class JwtConfigurationInput extends Shape
{
    /**
     * @param array{
     *     issuers: list<JwtIssuerInput>,
     *     defaultAlgorithms: list<'RS256'|'RS384'|'RS512'|'ES256'|'ES384'|'ES512'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
