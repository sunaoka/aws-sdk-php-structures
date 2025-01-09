<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $truststoreUri
 * @property string $truststoreVersion
 * @property list<string> $truststoreWarnings
 */
class MutualTlsAuthentication extends Shape
{
    /**
     * @param array{
     *     truststoreUri?: string,
     *     truststoreVersion?: string,
     *     truststoreWarnings?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
