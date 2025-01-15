<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ActionRequired>|null $ActionsRequired
 * @property 'SIMPLE'|'LDAP'|null $AuthenticationStrategy
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $BrokerArn
 * @property string|null $BrokerId
 * @property list<Shapes\BrokerInstance>|null $BrokerInstances
 * @property string|null $BrokerName
 * @property 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA'|null $BrokerState
 * @property Shapes\Configurations|null $Configurations
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ'|null $DeploymentMode
 * @property Shapes\EncryptionOptions|null $EncryptionOptions
 * @property 'ACTIVEMQ'|'RABBITMQ'|null $EngineType
 * @property string|null $EngineVersion
 * @property string|null $HostInstanceType
 * @property Shapes\LdapServerMetadataOutput|null $LdapServerMetadata
 * @property Shapes\LogsSummary|null $Logs
 * @property Shapes\WeeklyStartTime|null $MaintenanceWindowStartTime
 * @property 'SIMPLE'|'LDAP'|null $PendingAuthenticationStrategy
 * @property string|null $PendingEngineVersion
 * @property string|null $PendingHostInstanceType
 * @property Shapes\LdapServerMetadataOutput|null $PendingLdapServerMetadata
 * @property list<string>|null $PendingSecurityGroups
 * @property bool|null $PubliclyAccessible
 * @property list<string>|null $SecurityGroups
 * @property 'EBS'|'EFS'|null $StorageType
 * @property list<string>|null $SubnetIds
 * @property array<string, string>|null $Tags
 * @property list<Shapes\UserSummary>|null $Users
 * @property Shapes\DataReplicationMetadataOutput|null $DataReplicationMetadata
 * @property 'NONE'|'CRDR'|null $DataReplicationMode
 * @property Shapes\DataReplicationMetadataOutput|null $PendingDataReplicationMetadata
 * @property 'NONE'|'CRDR'|null $PendingDataReplicationMode
 */
class DescribeBrokerResponse extends Response
{
}
