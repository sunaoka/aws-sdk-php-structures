<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TruststoreUri
 * @property string|null $TruststoreVersion
 */
class MutualTlsAuthenticationInput extends Shape
{
    /**
     * @param array{
     *     TruststoreUri?: string|null,
     *     TruststoreVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
