<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TruststoreUri
 * @property string $TruststoreVersion
 */
class MutualTlsAuthenticationInput extends Shape
{
    /**
     * @param array{
     *     TruststoreUri?: string,
     *     TruststoreVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
