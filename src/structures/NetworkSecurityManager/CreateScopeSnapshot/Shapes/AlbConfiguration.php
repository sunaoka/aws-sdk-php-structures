<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateScopeSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'internet-facing'|'internal'|null $scheme
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $ipAddressType
 */
class AlbConfiguration extends Shape
{
    /**
     * @param array{
     *     scheme?: 'internet-facing'|'internal'|null,
     *     ipAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
