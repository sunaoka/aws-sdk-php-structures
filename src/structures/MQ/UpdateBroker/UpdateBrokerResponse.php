<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SIMPLE'|'LDAP'|'CONFIG_MANAGED'|null $AuthenticationStrategy
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $BrokerId
 * @property Shapes\ConfigurationId|null $Configuration
 * @property string|null $EngineVersion
 * @property string|null $HostInstanceType
 * @property Shapes\LdapServerMetadataOutput|null $LdapServerMetadata
 * @property Shapes\Logs|null $Logs
 * @property Shapes\WeeklyStartTime|null $MaintenanceWindowStartTime
 * @property list<string>|null $SecurityGroups
 * @property Shapes\DataReplicationMetadataOutput|null $DataReplicationMetadata
 * @property 'NONE'|'CRDR'|null $DataReplicationMode
 * @property Shapes\DataReplicationMetadataOutput|null $PendingDataReplicationMetadata
 * @property 'NONE'|'CRDR'|null $PendingDataReplicationMode
 */
class UpdateBrokerResponse extends Response
{
}
