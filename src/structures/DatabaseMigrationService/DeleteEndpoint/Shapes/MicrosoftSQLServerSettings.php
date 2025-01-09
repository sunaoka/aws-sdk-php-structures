<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Port
 * @property int $BcpPacketSize
 * @property string $DatabaseName
 * @property string $ControlTablesFileGroup
 * @property string $Password
 * @property bool $QuerySingleAlwaysOnNode
 * @property bool $ReadBackupOnly
 * @property 'rely-on-sql-server-replication-agent'|'exclusive-automatic-truncation'|'shared-automatic-truncation' $SafeguardPolicy
 * @property string $ServerName
 * @property string $Username
 * @property bool $UseBcpFullLoad
 * @property bool $UseThirdPartyBackupDevice
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property bool $TrimSpaceInChar
 * @property 'BackupOnly'|'PreferBackup'|'PreferTlog'|'TlogOnly' $TlogAccessMode
 * @property bool $ForceLobLookup
 * @property 'password'|'kerberos' $AuthenticationMethod
 */
class MicrosoftSQLServerSettings extends Shape
{
    /**
     * @param array{
     *     Port?: int,
     *     BcpPacketSize?: int,
     *     DatabaseName?: string,
     *     ControlTablesFileGroup?: string,
     *     Password?: string,
     *     QuerySingleAlwaysOnNode?: bool,
     *     ReadBackupOnly?: bool,
     *     SafeguardPolicy?: 'rely-on-sql-server-replication-agent'|'exclusive-automatic-truncation'|'shared-automatic-truncation',
     *     ServerName?: string,
     *     Username?: string,
     *     UseBcpFullLoad?: bool,
     *     UseThirdPartyBackupDevice?: bool,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     TrimSpaceInChar?: bool,
     *     TlogAccessMode?: 'BackupOnly'|'PreferBackup'|'PreferTlog'|'TlogOnly',
     *     ForceLobLookup?: bool,
     *     AuthenticationMethod?: 'password'|'kerberos'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
