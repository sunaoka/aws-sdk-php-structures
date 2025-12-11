<?php

namespace Sunaoka\Aws\Structures\Odb\ListOdbNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null $status
 * @property list<string>|null $ipv4Addresses
 * @property string|null $domainName
 * @property string|null $stsPolicyDocument
 */
class StsAccess extends Shape
{
    /**
     * @param array{
     *     status?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null,
     *     ipv4Addresses?: list<string>|null,
     *     domainName?: string|null,
     *     stsPolicyDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
