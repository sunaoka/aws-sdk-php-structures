<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\StartMaintenance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociatePublicIpAddress
 * @property int $BackupRetentionCount
 * @property string $ServerName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $CloudFormationStackArn
 * @property string $CustomDomain
 * @property bool $DisableAutomatedBackup
 * @property string $Endpoint
 * @property string $Engine
 * @property string $EngineModel
 * @property list<EngineAttribute> $EngineAttributes
 * @property string $EngineVersion
 * @property string $InstanceProfileArn
 * @property string $InstanceType
 * @property string $KeyPair
 * @property 'SUCCESS'|'FAILED' $MaintenanceStatus
 * @property string $PreferredMaintenanceWindow
 * @property string $PreferredBackupWindow
 * @property list<string> $SecurityGroupIds
 * @property string $ServiceRoleArn
 * @property 'BACKING_UP'|'CONNECTION_LOST'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|'HEALTHY'|'RUNNING'|'RESTORING'|'SETUP'|'UNDER_MAINTENANCE'|'UNHEALTHY'|'TERMINATED' $Status
 * @property string $StatusReason
 * @property list<string> $SubnetIds
 * @property string $ServerArn
 */
class Server extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool,
     *     BackupRetentionCount?: int,
     *     ServerName?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     CloudFormationStackArn?: string,
     *     CustomDomain?: string,
     *     DisableAutomatedBackup?: bool,
     *     Endpoint?: string,
     *     Engine?: string,
     *     EngineModel?: string,
     *     EngineAttributes?: list<EngineAttribute>,
     *     EngineVersion?: string,
     *     InstanceProfileArn?: string,
     *     InstanceType?: string,
     *     KeyPair?: string,
     *     MaintenanceStatus?: 'SUCCESS'|'FAILED',
     *     PreferredMaintenanceWindow?: string,
     *     PreferredBackupWindow?: string,
     *     SecurityGroupIds?: list<string>,
     *     ServiceRoleArn?: string,
     *     Status?: 'BACKING_UP'|'CONNECTION_LOST'|'CREATING'|'DELETING'|'MODIFYING'|'FAILED'|'HEALTHY'|'RUNNING'|'RESTORING'|'SETUP'|'UNDER_MAINTENANCE'|'UNHEALTHY'|'TERMINATED',
     *     StatusReason?: string,
     *     SubnetIds?: list<string>,
     *     ServerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
