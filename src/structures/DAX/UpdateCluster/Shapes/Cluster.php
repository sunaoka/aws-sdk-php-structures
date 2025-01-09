<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property string $Description
 * @property string $ClusterArn
 * @property int $TotalNodes
 * @property int $ActiveNodes
 * @property string $NodeType
 * @property string $Status
 * @property Endpoint $ClusterDiscoveryEndpoint
 * @property list<string> $NodeIdsToRemove
 * @property list<Node> $Nodes
 * @property string $PreferredMaintenanceWindow
 * @property NotificationConfiguration $NotificationConfiguration
 * @property string $SubnetGroup
 * @property list<SecurityGroupMembership> $SecurityGroups
 * @property string $IamRoleArn
 * @property ParameterGroupStatus $ParameterGroup
 * @property SSEDescription $SSEDescription
 * @property 'NONE'|'TLS' $ClusterEndpointEncryptionType
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     Description?: string,
     *     ClusterArn?: string,
     *     TotalNodes?: int,
     *     ActiveNodes?: int,
     *     NodeType?: string,
     *     Status?: string,
     *     ClusterDiscoveryEndpoint?: Endpoint,
     *     NodeIdsToRemove?: list<string>,
     *     Nodes?: list<Node>,
     *     PreferredMaintenanceWindow?: string,
     *     NotificationConfiguration?: NotificationConfiguration,
     *     SubnetGroup?: string,
     *     SecurityGroups?: list<SecurityGroupMembership>,
     *     IamRoleArn?: string,
     *     ParameterGroup?: ParameterGroupStatus,
     *     SSEDescription?: SSEDescription,
     *     ClusterEndpointEncryptionType?: 'NONE'|'TLS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
