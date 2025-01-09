<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string $ResourceOwner
 * @property string $SubnetGroupName
 * @property string $EndpointStatus
 * @property string $EndpointName
 * @property \Aws\Api\DateTimeResult $EndpointCreateTime
 * @property int $Port
 * @property string $Address
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property VpcEndpoint $VpcEndpoint
 */
class EndpointAccess extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ResourceOwner?: string,
     *     SubnetGroupName?: string,
     *     EndpointStatus?: string,
     *     EndpointName?: string,
     *     EndpointCreateTime?: \Aws\Api\DateTimeResult,
     *     Port?: int,
     *     Address?: string,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     VpcEndpoint?: VpcEndpoint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
