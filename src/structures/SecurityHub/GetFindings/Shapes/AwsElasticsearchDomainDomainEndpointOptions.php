<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnforceHTTPS
 * @property string $TLSSecurityPolicy
 */
class AwsElasticsearchDomainDomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool,
     *     TLSSecurityPolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
