<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServiceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pendingVerification'|'verified'|'failed'|null $State
 * @property string|null $Type
 * @property string|null $Value
 * @property string|null $Name
 */
class PrivateDnsNameConfiguration extends Shape
{
    /**
     * @param array{
     *     State?: 'pendingVerification'|'verified'|'failed'|null,
     *     Type?: string|null,
     *     Value?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
