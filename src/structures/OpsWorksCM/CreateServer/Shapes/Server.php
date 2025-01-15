<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociatePublicIpAddress
 * @property int|null $BackupRetentionCount
 * @property string|null $ServerName
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CloudFormationStackArn
 * @property string|null $CustomDomain
 * @property bool|null $DisableAutomatedBackup
 * @property string|null $Endpoint
 * @property string|null $Engine
 * @property string|null $EngineModel
 * @property list<EngineAttribute>|null $EngineAttributes
 * @property string|null $EngineVersion
 * @property string|null $InstanceProfileArn
 * @property string|null $InstanceType
 * @property string|null $KeyPair
 * @property 'SUCCESS'|'FAILED'|null $MaintenanceStatus
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $PreferredBackupWindow
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $ServiceRoleArn
 * @property 'BACKING_UP'|'CONNECTION_LOST'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|'HEALTHY'|'RUNNING'|'RESTORING'|'SETUP'|'UNDER_MAINTENANCE'|'UNHEALTHY'|'TERMINATED'|null $Status
 * @property string|null $StatusReason
 * @property list<string>|null $SubnetIds
 * @property string|null $ServerArn
 */
class Server extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool|null,
     *     BackupRetentionCount?: int|null,
     *     ServerName?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CloudFormationStackArn?: string|null,
     *     CustomDomain?: string|null,
     *     DisableAutomatedBackup?: bool|null,
     *     Endpoint?: string|null,
     *     Engine?: string|null,
     *     EngineModel?: string|null,
     *     EngineAttributes?: list<EngineAttribute>|null,
     *     EngineVersion?: string|null,
     *     InstanceProfileArn?: string|null,
     *     InstanceType?: string|null,
     *     KeyPair?: string|null,
     *     MaintenanceStatus?: 'SUCCESS'|'FAILED'|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     ServiceRoleArn?: string|null,
     *     Status?: 'BACKING_UP'|'CONNECTION_LOST'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|'HEALTHY'|'RUNNING'|'RESTORING'|'SETUP'|'UNDER_MAINTENANCE'|'UNHEALTHY'|'TERMINATED'|null,
     *     StatusReason?: string|null,
     *     SubnetIds?: list<string>|null,
     *     ServerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
