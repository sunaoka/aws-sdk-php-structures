<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property bool $AutoMinorVersionUpgrade
 * @property string $BrokerId
 * @property Shapes\ConfigurationId $Configuration
 * @property string $EngineVersion
 * @property string $HostInstanceType
 * @property Shapes\LdapServerMetadataOutput $LdapServerMetadata
 * @property Shapes\Logs $Logs
 * @property Shapes\WeeklyStartTime $MaintenanceWindowStartTime
 * @property list<string> $SecurityGroups
 * @property Shapes\DataReplicationMetadataOutput $DataReplicationMetadata
 * @property 'NONE'|'CRDR' $DataReplicationMode
 * @property Shapes\DataReplicationMetadataOutput $PendingDataReplicationMetadata
 * @property 'NONE'|'CRDR' $PendingDataReplicationMode
 */
class UpdateBrokerResponse extends Response
{
}
