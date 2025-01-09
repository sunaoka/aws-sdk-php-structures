<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Audience
 * @property string $Issuer
 */
class JWTConfiguration extends Shape
{
    /**
     * @param array{
     *     Audience?: list<string>,
     *     Issuer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
