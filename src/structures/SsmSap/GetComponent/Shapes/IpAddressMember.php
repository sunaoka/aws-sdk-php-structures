<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property bool|null $Primary
 * @property 'VPC_SUBNET'|'ELASTIC_IP'|'OVERLAY'|'UNKNOWN'|null $AllocationType
 */
class IpAddressMember extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     Primary?: bool|null,
     *     AllocationType?: 'VPC_SUBNET'|'ELASTIC_IP'|'OVERLAY'|'UNKNOWN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
