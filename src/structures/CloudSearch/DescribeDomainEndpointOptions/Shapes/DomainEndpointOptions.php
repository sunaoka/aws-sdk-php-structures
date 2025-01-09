<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomainEndpointOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnforceHTTPS
 * @property 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07' $TLSSecurityPolicy
 */
class DomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool,
     *     TLSSecurityPolicy?: 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
