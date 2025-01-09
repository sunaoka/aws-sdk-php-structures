<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'LDAP' $AuthenticationStrategy
 * @property bool $AutoMinorVersionUpgrade
 * @property string $BrokerId
 * @property Shapes\ConfigurationId $Configuration
 * @property string $EngineVersion
 * @property string $HostInstanceType
 * @property Shapes\LdapServerMetadataInput $LdapServerMetadata
 * @property Shapes\Logs $Logs
 * @property Shapes\WeeklyStartTime $MaintenanceWindowStartTime
 * @property list<string> $SecurityGroups
 * @property 'NONE'|'CRDR' $DataReplicationMode
 */
class UpdateBrokerRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationStrategy?: 'SIMPLE'|'LDAP',
     *     AutoMinorVersionUpgrade?: bool,
     *     BrokerId: string,
     *     Configuration?: Shapes\ConfigurationId,
     *     EngineVersion?: string,
     *     HostInstanceType?: string,
     *     LdapServerMetadata?: Shapes\LdapServerMetadataInput,
     *     Logs?: Shapes\Logs,
     *     MaintenanceWindowStartTime?: Shapes\WeeklyStartTime,
     *     SecurityGroups?: list<string>,
     *     DataReplicationMode?: 'NONE'|'CRDR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
