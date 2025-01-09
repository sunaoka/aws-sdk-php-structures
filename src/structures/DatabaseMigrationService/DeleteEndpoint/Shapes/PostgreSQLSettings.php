<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AfterConnectScript
 * @property bool $CaptureDdls
 * @property int $MaxFileSize
 * @property string $DatabaseName
 * @property string $DdlArtifactsSchema
 * @property int $ExecuteTimeout
 * @property bool $FailTasksOnLobTruncation
 * @property bool $HeartbeatEnable
 * @property string $HeartbeatSchema
 * @property int $HeartbeatFrequency
 * @property string $Password
 * @property int $Port
 * @property string $ServerName
 * @property string $Username
 * @property string $SlotName
 * @property 'no-preference'|'test-decoding'|'pglogical' $PluginName
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property bool $TrimSpaceInChar
 * @property bool $MapBooleanAsBoolean
 * @property bool $MapJsonbAsClob
 * @property 'wstring'|'clob'|'nclob' $MapLongVarcharAs
 * @property 'default'|'babelfish' $DatabaseMode
 * @property string $BabelfishDatabaseName
 * @property bool $DisableUnicodeSourceFilter
 */
class PostgreSQLSettings extends Shape
{
    /**
     * @param array{
     *     AfterConnectScript?: string,
     *     CaptureDdls?: bool,
     *     MaxFileSize?: int,
     *     DatabaseName?: string,
     *     DdlArtifactsSchema?: string,
     *     ExecuteTimeout?: int,
     *     FailTasksOnLobTruncation?: bool,
     *     HeartbeatEnable?: bool,
     *     HeartbeatSchema?: string,
     *     HeartbeatFrequency?: int,
     *     Password?: string,
     *     Port?: int,
     *     ServerName?: string,
     *     Username?: string,
     *     SlotName?: string,
     *     PluginName?: 'no-preference'|'test-decoding'|'pglogical',
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     TrimSpaceInChar?: bool,
     *     MapBooleanAsBoolean?: bool,
     *     MapJsonbAsClob?: bool,
     *     MapLongVarcharAs?: 'wstring'|'clob'|'nclob',
     *     DatabaseMode?: 'default'|'babelfish',
     *     BabelfishDatabaseName?: string,
     *     DisableUnicodeSourceFilter?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
