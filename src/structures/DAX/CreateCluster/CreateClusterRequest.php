<?php

namespace Sunaoka\Aws\Structures\DAX\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeType
 * @property string $Description
 * @property int $ReplicationFactor
 * @property list<string> $AvailabilityZones
 * @property string $SubnetGroupName
 * @property list<string> $SecurityGroupIds
 * @property string $PreferredMaintenanceWindow
 * @property string $NotificationTopicArn
 * @property string $IamRoleArn
 * @property string $ParameterGroupName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SSESpecification $SSESpecification
 * @property 'NONE'|'TLS' $ClusterEndpointEncryptionType
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeType: string,
     *     Description?: string,
     *     ReplicationFactor: int,
     *     AvailabilityZones?: list<string>,
     *     SubnetGroupName?: string,
     *     SecurityGroupIds?: list<string>,
     *     PreferredMaintenanceWindow?: string,
     *     NotificationTopicArn?: string,
     *     IamRoleArn: string,
     *     ParameterGroupName?: string,
     *     Tags?: list<Shapes\Tag>,
     *     SSESpecification?: Shapes\SSESpecification,
     *     ClusterEndpointEncryptionType?: 'NONE'|'TLS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
