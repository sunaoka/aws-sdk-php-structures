<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pendingVerification'|'verified'|'failed' $State
 * @property string $Type
 * @property string $Value
 * @property string $Name
 */
class PrivateDnsNameConfiguration extends Shape
{
    /**
     * @param array{
     *     State?: 'pendingVerification'|'verified'|'failed',
     *     Type?: string,
     *     Value?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
