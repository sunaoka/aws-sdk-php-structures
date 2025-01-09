<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ActionRequired> $ActionsRequired
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property bool $AutoMinorVersionUpgrade
 * @property string $BrokerArn
 * @property string $BrokerId
 * @property list<Shapes\BrokerInstance> $BrokerInstances
 * @property string $BrokerName
 * @property 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA' $BrokerState
 * @property Shapes\Configurations $Configurations
 * @property \Aws\Api\DateTimeResult $Created
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ' $DeploymentMode
 * @property Shapes\EncryptionOptions $EncryptionOptions
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $EngineVersion
 * @property string $HostInstanceType
 * @property Shapes\LdapServerMetadataOutput $LdapServerMetadata
 * @property Shapes\LogsSummary $Logs
 * @property Shapes\WeeklyStartTime $MaintenanceWindowStartTime
 * @property 'SIMPLE'|'LDAP' $PendingAuthenticationStrategy
 * @property string $PendingEngineVersion
 * @property string $PendingHostInstanceType
 * @property Shapes\LdapServerMetadataOutput $PendingLdapServerMetadata
 * @property list<string> $PendingSecurityGroups
 * @property bool $PubliclyAccessible
 * @property list<string> $SecurityGroups
 * @property 'EBS'|'EFS' $StorageType
 * @property list<string> $SubnetIds
 * @property array<string, string> $Tags
 * @property list<Shapes\UserSummary> $Users
 * @property Shapes\DataReplicationMetadataOutput $DataReplicationMetadata
 * @property 'NONE'|'CRDR' $DataReplicationMode
 * @property Shapes\DataReplicationMetadataOutput $PendingDataReplicationMetadata
 * @property 'NONE'|'CRDR' $PendingDataReplicationMode
 */
class DescribeBrokerResponse extends Response
{
}
