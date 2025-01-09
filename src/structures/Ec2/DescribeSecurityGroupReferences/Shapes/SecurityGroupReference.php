<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $ReferencingVpcId
 * @property string $VpcPeeringConnectionId
 * @property string $TransitGatewayId
 */
class SecurityGroupReference extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     ReferencingVpcId?: string,
     *     VpcPeeringConnectionId?: string,
     *     TransitGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
