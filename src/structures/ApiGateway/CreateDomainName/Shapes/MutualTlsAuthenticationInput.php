<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $truststoreUri
 * @property string|null $truststoreVersion
 */
class MutualTlsAuthenticationInput extends Shape
{
    /**
     * @param array{
     *     truststoreUri?: string|null,
     *     truststoreVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
