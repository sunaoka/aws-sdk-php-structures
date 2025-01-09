<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property 'DUALSTACK'|'IPV4'|'IPV6' $IPAddressType
 */
class SubnetMapping extends Shape
{
    /**
     * @param array{
     *     SubnetId: string,
     *     IPAddressType?: 'DUALSTACK'|'IPV4'|'IPV6'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
