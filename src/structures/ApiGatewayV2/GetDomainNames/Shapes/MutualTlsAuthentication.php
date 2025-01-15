<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TruststoreUri
 * @property string|null $TruststoreVersion
 * @property list<string>|null $TruststoreWarnings
 */
class MutualTlsAuthentication extends Shape
{
    /**
     * @param array{
     *     TruststoreUri?: string|null,
     *     TruststoreVersion?: string|null,
     *     TruststoreWarnings?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
