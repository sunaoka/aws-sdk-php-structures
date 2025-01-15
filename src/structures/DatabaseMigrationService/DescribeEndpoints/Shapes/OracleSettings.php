<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AddSupplementalLogging
 * @property int|null $ArchivedLogDestId
 * @property int|null $AdditionalArchivedLogDestId
 * @property list<int>|null $ExtraArchivedLogDestIds
 * @property bool|null $AllowSelectNestedTables
 * @property int|null $ParallelAsmReadThreads
 * @property int|null $ReadAheadBlocks
 * @property bool|null $AccessAlternateDirectly
 * @property bool|null $UseAlternateFolderForOnline
 * @property string|null $OraclePathPrefix
 * @property string|null $UsePathPrefix
 * @property bool|null $ReplacePathPrefix
 * @property bool|null $EnableHomogenousTablespace
 * @property bool|null $DirectPathNoLog
 * @property bool|null $ArchivedLogsOnly
 * @property string|null $AsmPassword
 * @property string|null $AsmServer
 * @property string|null $AsmUser
 * @property 'default'|'char'|'byte'|null $CharLengthSemantics
 * @property string|null $DatabaseName
 * @property bool|null $DirectPathParallelLoad
 * @property bool|null $FailTasksOnLobTruncation
 * @property int|null $NumberDatatypeScale
 * @property string|null $Password
 * @property int|null $Port
 * @property bool|null $ReadTableSpaceName
 * @property int|null $RetryInterval
 * @property string|null $SecurityDbEncryption
 * @property string|null $SecurityDbEncryptionName
 * @property string|null $ServerName
 * @property string|null $SpatialDataOptionToGeoJsonFunctionName
 * @property int|null $StandbyDelayTime
 * @property string|null $Username
 * @property bool|null $UseBFile
 * @property bool|null $UseDirectPathFullLoad
 * @property bool|null $UseLogminerReader
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property string|null $SecretsManagerOracleAsmAccessRoleArn
 * @property string|null $SecretsManagerOracleAsmSecretId
 * @property bool|null $TrimSpaceInChar
 * @property bool|null $ConvertTimestampWithZoneToUTC
 * @property int|null $OpenTransactionWindow
 * @property 'password'|'kerberos'|null $AuthenticationMethod
 */
class OracleSettings extends Shape
{
    /**
     * @param array{
     *     AddSupplementalLogging?: bool|null,
     *     ArchivedLogDestId?: int|null,
     *     AdditionalArchivedLogDestId?: int|null,
     *     ExtraArchivedLogDestIds?: list<int>|null,
     *     AllowSelectNestedTables?: bool|null,
     *     ParallelAsmReadThreads?: int|null,
     *     ReadAheadBlocks?: int|null,
     *     AccessAlternateDirectly?: bool|null,
     *     UseAlternateFolderForOnline?: bool|null,
     *     OraclePathPrefix?: string|null,
     *     UsePathPrefix?: string|null,
     *     ReplacePathPrefix?: bool|null,
     *     EnableHomogenousTablespace?: bool|null,
     *     DirectPathNoLog?: bool|null,
     *     ArchivedLogsOnly?: bool|null,
     *     AsmPassword?: string|null,
     *     AsmServer?: string|null,
     *     AsmUser?: string|null,
     *     CharLengthSemantics?: 'default'|'char'|'byte'|null,
     *     DatabaseName?: string|null,
     *     DirectPathParallelLoad?: bool|null,
     *     FailTasksOnLobTruncation?: bool|null,
     *     NumberDatatypeScale?: int|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     ReadTableSpaceName?: bool|null,
     *     RetryInterval?: int|null,
     *     SecurityDbEncryption?: string|null,
     *     SecurityDbEncryptionName?: string|null,
     *     ServerName?: string|null,
     *     SpatialDataOptionToGeoJsonFunctionName?: string|null,
     *     StandbyDelayTime?: int|null,
     *     Username?: string|null,
     *     UseBFile?: bool|null,
     *     UseDirectPathFullLoad?: bool|null,
     *     UseLogminerReader?: bool|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     SecretsManagerOracleAsmAccessRoleArn?: string|null,
     *     SecretsManagerOracleAsmSecretId?: string|null,
     *     TrimSpaceInChar?: bool|null,
     *     ConvertTimestampWithZoneToUTC?: bool|null,
     *     OpenTransactionWindow?: int|null,
     *     AuthenticationMethod?: 'password'|'kerberos'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
