<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP'|null $AuthenticationStrategy
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string $BrokerName
 * @property Shapes\ConfigurationId|null $Configuration
 * @property string|null $CreatorRequestId
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ' $DeploymentMode
 * @property Shapes\EncryptionOptions|null $EncryptionOptions
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string|null $EngineVersion
 * @property string $HostInstanceType
 * @property Shapes\LdapServerMetadataInput|null $LdapServerMetadata
 * @property Shapes\Logs|null $Logs
 * @property Shapes\WeeklyStartTime|null $MaintenanceWindowStartTime
 * @property bool $PubliclyAccessible
 * @property list<string>|null $SecurityGroups
 * @property 'EBS'|'EFS'|null $StorageType
 * @property list<string>|null $SubnetIds
 * @property array<string, string>|null $Tags
 * @property list<Shapes\User> $Users
 * @property 'NONE'|'CRDR'|null $DataReplicationMode
 * @property string|null $DataReplicationPrimaryBrokerArn
 */
class CreateBrokerRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP'|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     BrokerName: string,
     *     Configuration?: Shapes\ConfigurationId|null,
     *     CreatorRequestId?: string|null,
     *     DeploymentMode: 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ',
     *     EncryptionOptions?: Shapes\EncryptionOptions|null,
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersion?: string|null,
     *     HostInstanceType: string,
     *     LdapServerMetadata?: Shapes\LdapServerMetadataInput|null,
     *     Logs?: Shapes\Logs|null,
     *     MaintenanceWindowStartTime?: Shapes\WeeklyStartTime|null,
     *     PubliclyAccessible: bool,
     *     SecurityGroups?: list<string>|null,
     *     StorageType?: 'EBS'|'EFS'|null,
     *     SubnetIds?: list<string>|null,
     *     Tags?: array<string, string>|null,
     *     Users: list<Shapes\User>,
     *     DataReplicationMode?: 'NONE'|'CRDR'|null,
     *     DataReplicationPrimaryBrokerArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
