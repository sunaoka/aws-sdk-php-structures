<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP'|'CONFIG_MANAGED'|null $AuthenticationStrategy
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string $BrokerId
 * @property Shapes\ConfigurationId|null $Configuration
 * @property string|null $EngineVersion
 * @property string|null $HostInstanceType
 * @property Shapes\LdapServerMetadataInput|null $LdapServerMetadata
 * @property Shapes\Logs|null $Logs
 * @property Shapes\WeeklyStartTime|null $MaintenanceWindowStartTime
 * @property list<string>|null $SecurityGroups
 * @property 'NONE'|'CRDR'|null $DataReplicationMode
 */
class UpdateBrokerRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP'|'CONFIG_MANAGED'|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     BrokerId: string,
     *     Configuration?: Shapes\ConfigurationId|null,
     *     EngineVersion?: string|null,
     *     HostInstanceType?: string|null,
     *     LdapServerMetadata?: Shapes\LdapServerMetadataInput|null,
     *     Logs?: Shapes\Logs|null,
     *     MaintenanceWindowStartTime?: Shapes\WeeklyStartTime|null,
     *     SecurityGroups?: list<string>|null,
     *     DataReplicationMode?: 'NONE'|'CRDR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
