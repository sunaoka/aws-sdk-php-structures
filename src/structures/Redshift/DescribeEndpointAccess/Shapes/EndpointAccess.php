<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ResourceOwner
 * @property string|null $SubnetGroupName
 * @property string|null $EndpointStatus
 * @property string|null $EndpointName
 * @property \Aws\Api\DateTimeResult|null $EndpointCreateTime
 * @property int|null $Port
 * @property string|null $Address
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property VpcEndpoint|null $VpcEndpoint
 */
class EndpointAccess extends Shape
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ResourceOwner?: string|null,
     *     SubnetGroupName?: string|null,
     *     EndpointStatus?: string|null,
     *     EndpointName?: string|null,
     *     EndpointCreateTime?: \Aws\Api\DateTimeResult|null,
     *     Port?: int|null,
     *     Address?: string|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     VpcEndpoint?: VpcEndpoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
