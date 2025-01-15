<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|null $BackupPolicy
 * @property BackupRetentionPolicy|null $BackupRetentionPolicy
 * @property string|null $ClusterId
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property list<Hsm>|null $Hsms
 * @property string|null $HsmType
 * @property \Aws\Api\DateTimeResult|null $HsmTypeRollbackExpiration
 * @property string|null $PreCoPassword
 * @property string|null $SecurityGroup
 * @property string|null $SourceBackupId
 * @property 'CREATE_IN_PROGRESS'|'UNINITIALIZED'|'INITIALIZE_IN_PROGRESS'|'INITIALIZED'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'MODIFY_IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DEGRADED'|null $State
 * @property string|null $StateMessage
 * @property array<string, string>|null $SubnetMapping
 * @property string|null $VpcId
 * @property 'IPV4'|'DUALSTACK'|null $NetworkType
 * @property Certificates|null $Certificates
 * @property list<Tag>|null $TagList
 * @property 'FIPS'|'NON_FIPS'|null $Mode
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     BackupPolicy?: 'DEFAULT'|null,
     *     BackupRetentionPolicy?: BackupRetentionPolicy|null,
     *     ClusterId?: string|null,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Hsms?: list<Hsm>|null,
     *     HsmType?: string|null,
     *     HsmTypeRollbackExpiration?: \Aws\Api\DateTimeResult|null,
     *     PreCoPassword?: string|null,
     *     SecurityGroup?: string|null,
     *     SourceBackupId?: string|null,
     *     State?: 'CREATE_IN_PROGRESS'|'UNINITIALIZED'|'INITIALIZE_IN_PROGRESS'|'INITIALIZED'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'MODIFY_IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DEGRADED'|null,
     *     StateMessage?: string|null,
     *     SubnetMapping?: array<string, string>|null,
     *     VpcId?: string|null,
     *     NetworkType?: 'IPV4'|'DUALSTACK'|null,
     *     Certificates?: Certificates|null,
     *     TagList?: list<Tag>|null,
     *     Mode?: 'FIPS'|'NON_FIPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
