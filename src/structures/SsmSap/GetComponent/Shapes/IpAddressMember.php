<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property bool $Primary
 * @property 'VPC_SUBNET'|'ELASTIC_IP'|'OVERLAY'|'UNKNOWN' $AllocationType
 */
class IpAddressMember extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     Primary?: bool,
     *     AllocationType?: 'VPC_SUBNET'|'ELASTIC_IP'|'OVERLAY'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
