<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $address
 * @property string $endpointArn
 * @property \Aws\Api\DateTimeResult $endpointCreateTime
 * @property string $endpointName
 * @property string $endpointStatus
 * @property int $port
 * @property list<string> $subnetIds
 * @property VpcEndpoint $vpcEndpoint
 * @property list<VpcSecurityGroupMembership> $vpcSecurityGroups
 * @property string $workgroupName
 */
class EndpointAccess extends Shape
{
    /**
     * @param array{
     *     address?: string,
     *     endpointArn?: string,
     *     endpointCreateTime?: \Aws\Api\DateTimeResult,
     *     endpointName?: string,
     *     endpointStatus?: string,
     *     port?: int,
     *     subnetIds?: list<string>,
     *     vpcEndpoint?: VpcEndpoint,
     *     vpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
