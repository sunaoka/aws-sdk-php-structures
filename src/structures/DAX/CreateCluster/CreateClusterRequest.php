<?php

namespace Sunaoka\Aws\Structures\DAX\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeType
 * @property string|null $Description
 * @property int $ReplicationFactor
 * @property list<string>|null $AvailabilityZones
 * @property string|null $SubnetGroupName
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $NotificationTopicArn
 * @property string $IamRoleArn
 * @property string|null $ParameterGroupName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SSESpecification|null $SSESpecification
 * @property 'NONE'|'TLS'|null $ClusterEndpointEncryptionType
 * @property 'ipv4'|'ipv6'|'dual_stack'|null $NetworkType
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeType: string,
     *     Description?: string|null,
     *     ReplicationFactor: int,
     *     AvailabilityZones?: list<string>|null,
     *     SubnetGroupName?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     NotificationTopicArn?: string|null,
     *     IamRoleArn: string,
     *     ParameterGroupName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SSESpecification?: Shapes\SSESpecification|null,
     *     ClusterEndpointEncryptionType?: 'NONE'|'TLS'|null,
     *     NetworkType?: 'ipv4'|'ipv6'|'dual_stack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
