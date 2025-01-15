<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $truststoreUri
 * @property string|null $truststoreVersion
 * @property list<string>|null $truststoreWarnings
 */
class MutualTlsAuthentication extends Shape
{
    /**
     * @param array{
     *     truststoreUri?: string|null,
     *     truststoreVersion?: string|null,
     *     truststoreWarnings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
