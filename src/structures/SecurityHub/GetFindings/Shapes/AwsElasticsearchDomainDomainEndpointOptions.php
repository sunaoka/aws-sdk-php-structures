<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnforceHTTPS
 * @property string|null $TLSSecurityPolicy
 */
class AwsElasticsearchDomainDomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool|null,
     *     TLSSecurityPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
