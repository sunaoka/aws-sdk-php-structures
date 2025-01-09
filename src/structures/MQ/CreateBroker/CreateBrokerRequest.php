<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property bool $AutoMinorVersionUpgrade
 * @property string $BrokerName
 * @property Shapes\ConfigurationId $Configuration
 * @property string $CreatorRequestId
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ' $DeploymentMode
 * @property Shapes\EncryptionOptions $EncryptionOptions
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $EngineVersion
 * @property string $HostInstanceType
 * @property Shapes\LdapServerMetadataInput $LdapServerMetadata
 * @property Shapes\Logs $Logs
 * @property Shapes\WeeklyStartTime $MaintenanceWindowStartTime
 * @property bool $PubliclyAccessible
 * @property list<string> $SecurityGroups
 * @property 'EBS'|'EFS' $StorageType
 * @property list<string> $SubnetIds
 * @property array<string, string> $Tags
 * @property list<Shapes\User> $Users
 * @property 'NONE'|'CRDR' $DataReplicationMode
 * @property string $DataReplicationPrimaryBrokerArn
 */
class CreateBrokerRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP',
     *     AutoMinorVersionUpgrade?: bool,
     *     BrokerName: string,
     *     Configuration?: Shapes\ConfigurationId,
     *     CreatorRequestId?: string,
     *     DeploymentMode: 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ',
     *     EncryptionOptions?: Shapes\EncryptionOptions,
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersion?: string,
     *     HostInstanceType: string,
     *     LdapServerMetadata?: Shapes\LdapServerMetadataInput,
     *     Logs?: Shapes\Logs,
     *     MaintenanceWindowStartTime?: Shapes\WeeklyStartTime,
     *     PubliclyAccessible: bool,
     *     SecurityGroups?: list<string>,
     *     StorageType?: 'EBS'|'EFS',
     *     SubnetIds?: list<string>,
     *     Tags?: array<string, string>,
     *     Users: list<Shapes\User>,
     *     DataReplicationMode?: 'NONE'|'CRDR',
     *     DataReplicationPrimaryBrokerArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
