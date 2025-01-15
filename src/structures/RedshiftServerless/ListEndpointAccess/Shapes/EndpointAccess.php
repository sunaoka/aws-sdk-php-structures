<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $address
 * @property string|null $endpointArn
 * @property \Aws\Api\DateTimeResult|null $endpointCreateTime
 * @property string|null $endpointName
 * @property string|null $endpointStatus
 * @property int|null $port
 * @property list<string>|null $subnetIds
 * @property VpcEndpoint|null $vpcEndpoint
 * @property list<VpcSecurityGroupMembership>|null $vpcSecurityGroups
 * @property string|null $workgroupName
 */
class EndpointAccess extends Shape
{
    /**
     * @param array{
     *     address?: string|null,
     *     endpointArn?: string|null,
     *     endpointCreateTime?: \Aws\Api\DateTimeResult|null,
     *     endpointName?: string|null,
     *     endpointStatus?: string|null,
     *     port?: int|null,
     *     subnetIds?: list<string>|null,
     *     vpcEndpoint?: VpcEndpoint|null,
     *     vpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
