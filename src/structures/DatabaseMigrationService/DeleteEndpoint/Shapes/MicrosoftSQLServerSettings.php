<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Port
 * @property int|null $BcpPacketSize
 * @property string|null $DatabaseName
 * @property string|null $ControlTablesFileGroup
 * @property string|null $Password
 * @property bool|null $QuerySingleAlwaysOnNode
 * @property bool|null $ReadBackupOnly
 * @property 'rely-on-sql-server-replication-agent'|'exclusive-automatic-truncation'|'shared-automatic-truncation'|null $SafeguardPolicy
 * @property string|null $ServerName
 * @property string|null $Username
 * @property bool|null $UseBcpFullLoad
 * @property bool|null $UseThirdPartyBackupDevice
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property bool|null $TrimSpaceInChar
 * @property 'BackupOnly'|'PreferBackup'|'PreferTlog'|'TlogOnly'|null $TlogAccessMode
 * @property bool|null $ForceLobLookup
 * @property 'password'|'kerberos'|null $AuthenticationMethod
 */
class MicrosoftSQLServerSettings extends Shape
{
    /**
     * @param array{
     *     Port?: int|null,
     *     BcpPacketSize?: int|null,
     *     DatabaseName?: string|null,
     *     ControlTablesFileGroup?: string|null,
     *     Password?: string|null,
     *     QuerySingleAlwaysOnNode?: bool|null,
     *     ReadBackupOnly?: bool|null,
     *     SafeguardPolicy?: 'rely-on-sql-server-replication-agent'|'exclusive-automatic-truncation'|'shared-automatic-truncation'|null,
     *     ServerName?: string|null,
     *     Username?: string|null,
     *     UseBcpFullLoad?: bool|null,
     *     UseThirdPartyBackupDevice?: bool|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     TrimSpaceInChar?: bool|null,
     *     TlogAccessMode?: 'BackupOnly'|'PreferBackup'|'PreferTlog'|'TlogOnly'|null,
     *     ForceLobLookup?: bool|null,
     *     AuthenticationMethod?: 'password'|'kerberos'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
