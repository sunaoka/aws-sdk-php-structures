<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AfterConnectScript
 * @property bool|null $CaptureDdls
 * @property int|null $MaxFileSize
 * @property string|null $DatabaseName
 * @property string|null $DdlArtifactsSchema
 * @property int|null $ExecuteTimeout
 * @property bool|null $FailTasksOnLobTruncation
 * @property bool|null $HeartbeatEnable
 * @property string|null $HeartbeatSchema
 * @property int|null $HeartbeatFrequency
 * @property string|null $Password
 * @property int|null $Port
 * @property string|null $ServerName
 * @property string|null $Username
 * @property string|null $SlotName
 * @property 'no-preference'|'test-decoding'|'pglogical'|null $PluginName
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property bool|null $TrimSpaceInChar
 * @property bool|null $MapBooleanAsBoolean
 * @property bool|null $MapJsonbAsClob
 * @property 'wstring'|'clob'|'nclob'|null $MapLongVarcharAs
 * @property 'default'|'babelfish'|null $DatabaseMode
 * @property string|null $BabelfishDatabaseName
 * @property bool|null $DisableUnicodeSourceFilter
 */
class PostgreSQLSettings extends Shape
{
    /**
     * @param array{
     *     AfterConnectScript?: string|null,
     *     CaptureDdls?: bool|null,
     *     MaxFileSize?: int|null,
     *     DatabaseName?: string|null,
     *     DdlArtifactsSchema?: string|null,
     *     ExecuteTimeout?: int|null,
     *     FailTasksOnLobTruncation?: bool|null,
     *     HeartbeatEnable?: bool|null,
     *     HeartbeatSchema?: string|null,
     *     HeartbeatFrequency?: int|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     ServerName?: string|null,
     *     Username?: string|null,
     *     SlotName?: string|null,
     *     PluginName?: 'no-preference'|'test-decoding'|'pglogical'|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     TrimSpaceInChar?: bool|null,
     *     MapBooleanAsBoolean?: bool|null,
     *     MapJsonbAsClob?: bool|null,
     *     MapLongVarcharAs?: 'wstring'|'clob'|'nclob'|null,
     *     DatabaseMode?: 'default'|'babelfish'|null,
     *     BabelfishDatabaseName?: string|null,
     *     DisableUnicodeSourceFilter?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
