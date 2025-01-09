<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $truststoreUri
 * @property string $truststoreVersion
 */
class MutualTlsAuthenticationInput extends Shape
{
    /**
     * @param array{
     *     truststoreUri?: string,
     *     truststoreVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
