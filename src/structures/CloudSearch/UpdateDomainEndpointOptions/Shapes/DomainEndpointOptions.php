<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateDomainEndpointOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnforceHTTPS
 * @property 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|null $TLSSecurityPolicy
 */
class DomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool|null,
     *     TLSSecurityPolicy?: 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
