<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT' $BackupPolicy
 * @property BackupRetentionPolicy $BackupRetentionPolicy
 * @property string $ClusterId
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property list<Hsm> $Hsms
 * @property string $HsmType
 * @property \Aws\Api\DateTimeResult $HsmTypeRollbackExpiration
 * @property string $PreCoPassword
 * @property string $SecurityGroup
 * @property string $SourceBackupId
 * @property 'CREATE_IN_PROGRESS'|'UNINITIALIZED'|'INITIALIZE_IN_PROGRESS'|'INITIALIZED'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'MODIFY_IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DEGRADED' $State
 * @property string $StateMessage
 * @property array<string, string> $SubnetMapping
 * @property string $VpcId
 * @property 'IPV4'|'DUALSTACK' $NetworkType
 * @property Certificates $Certificates
 * @property list<Tag> $TagList
 * @property 'FIPS'|'NON_FIPS' $Mode
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     BackupPolicy?: 'DEFAULT',
     *     BackupRetentionPolicy?: BackupRetentionPolicy,
     *     ClusterId?: string,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     Hsms?: list<Hsm>,
     *     HsmType?: string,
     *     HsmTypeRollbackExpiration?: \Aws\Api\DateTimeResult,
     *     PreCoPassword?: string,
     *     SecurityGroup?: string,
     *     SourceBackupId?: string,
     *     State?: 'CREATE_IN_PROGRESS'|'UNINITIALIZED'|'INITIALIZE_IN_PROGRESS'|'INITIALIZED'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'MODIFY_IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'DELETED'|'DEGRADED',
     *     StateMessage?: string,
     *     SubnetMapping?: array<string, string>,
     *     VpcId?: string,
     *     NetworkType?: 'IPV4'|'DUALSTACK',
     *     Certificates?: Certificates,
     *     TagList?: list<Tag>,
     *     Mode?: 'FIPS'|'NON_FIPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
