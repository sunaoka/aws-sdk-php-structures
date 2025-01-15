<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property string|null $ReferencingVpcId
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $TransitGatewayId
 */
class SecurityGroupReference extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     ReferencingVpcId?: string|null,
     *     VpcPeeringConnectionId?: string|null,
     *     TransitGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
