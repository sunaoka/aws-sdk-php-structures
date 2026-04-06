<?php

namespace Sunaoka\Aws\Structures\DAX\RebootNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property string|null $Description
 * @property string|null $ClusterArn
 * @property int|null $TotalNodes
 * @property int|null $ActiveNodes
 * @property string|null $NodeType
 * @property string|null $Status
 * @property Endpoint|null $ClusterDiscoveryEndpoint
 * @property list<string>|null $NodeIdsToRemove
 * @property list<Node>|null $Nodes
 * @property string|null $PreferredMaintenanceWindow
 * @property NotificationConfiguration|null $NotificationConfiguration
 * @property string|null $SubnetGroup
 * @property list<SecurityGroupMembership>|null $SecurityGroups
 * @property string|null $IamRoleArn
 * @property ParameterGroupStatus|null $ParameterGroup
 * @property SSEDescription|null $SSEDescription
 * @property 'NONE'|'TLS'|null $ClusterEndpointEncryptionType
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     Description?: string|null,
     *     ClusterArn?: string|null,
     *     TotalNodes?: int|null,
     *     ActiveNodes?: int|null,
     *     NodeType?: string|null,
     *     Status?: string|null,
     *     ClusterDiscoveryEndpoint?: Endpoint|null,
     *     NodeIdsToRemove?: list<string>|null,
     *     Nodes?: list<Node>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     NotificationConfiguration?: NotificationConfiguration|null,
     *     SubnetGroup?: string|null,
     *     SecurityGroups?: list<SecurityGroupMembership>|null,
     *     IamRoleArn?: string|null,
     *     ParameterGroup?: ParameterGroupStatus|null,
     *     SSEDescription?: SSEDescription|null,
     *     ClusterEndpointEncryptionType?: 'NONE'|'TLS'|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
