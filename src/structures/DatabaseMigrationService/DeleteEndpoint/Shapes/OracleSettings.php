<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AddSupplementalLogging
 * @property int $ArchivedLogDestId
 * @property int $AdditionalArchivedLogDestId
 * @property list<int> $ExtraArchivedLogDestIds
 * @property bool $AllowSelectNestedTables
 * @property int $ParallelAsmReadThreads
 * @property int $ReadAheadBlocks
 * @property bool $AccessAlternateDirectly
 * @property bool $UseAlternateFolderForOnline
 * @property string $OraclePathPrefix
 * @property string $UsePathPrefix
 * @property bool $ReplacePathPrefix
 * @property bool $EnableHomogenousTablespace
 * @property bool $DirectPathNoLog
 * @property bool $ArchivedLogsOnly
 * @property string $AsmPassword
 * @property string $AsmServer
 * @property string $AsmUser
 * @property 'default'|'char'|'byte' $CharLengthSemantics
 * @property string $DatabaseName
 * @property bool $DirectPathParallelLoad
 * @property bool $FailTasksOnLobTruncation
 * @property int $NumberDatatypeScale
 * @property string $Password
 * @property int $Port
 * @property bool $ReadTableSpaceName
 * @property int $RetryInterval
 * @property string $SecurityDbEncryption
 * @property string $SecurityDbEncryptionName
 * @property string $ServerName
 * @property string $SpatialDataOptionToGeoJsonFunctionName
 * @property int $StandbyDelayTime
 * @property string $Username
 * @property bool $UseBFile
 * @property bool $UseDirectPathFullLoad
 * @property bool $UseLogminerReader
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property string $SecretsManagerOracleAsmAccessRoleArn
 * @property string $SecretsManagerOracleAsmSecretId
 * @property bool $TrimSpaceInChar
 * @property bool $ConvertTimestampWithZoneToUTC
 * @property int $OpenTransactionWindow
 * @property 'password'|'kerberos' $AuthenticationMethod
 */
class OracleSettings extends Shape
{
    /**
     * @param array{
     *     AddSupplementalLogging?: bool,
     *     ArchivedLogDestId?: int,
     *     AdditionalArchivedLogDestId?: int,
     *     ExtraArchivedLogDestIds?: list<int>,
     *     AllowSelectNestedTables?: bool,
     *     ParallelAsmReadThreads?: int,
     *     ReadAheadBlocks?: int,
     *     AccessAlternateDirectly?: bool,
     *     UseAlternateFolderForOnline?: bool,
     *     OraclePathPrefix?: string,
     *     UsePathPrefix?: string,
     *     ReplacePathPrefix?: bool,
     *     EnableHomogenousTablespace?: bool,
     *     DirectPathNoLog?: bool,
     *     ArchivedLogsOnly?: bool,
     *     AsmPassword?: string,
     *     AsmServer?: string,
     *     AsmUser?: string,
     *     CharLengthSemantics?: 'default'|'char'|'byte',
     *     DatabaseName?: string,
     *     DirectPathParallelLoad?: bool,
     *     FailTasksOnLobTruncation?: bool,
     *     NumberDatatypeScale?: int,
     *     Password?: string,
     *     Port?: int,
     *     ReadTableSpaceName?: bool,
     *     RetryInterval?: int,
     *     SecurityDbEncryption?: string,
     *     SecurityDbEncryptionName?: string,
     *     ServerName?: string,
     *     SpatialDataOptionToGeoJsonFunctionName?: string,
     *     StandbyDelayTime?: int,
     *     Username?: string,
     *     UseBFile?: bool,
     *     UseDirectPathFullLoad?: bool,
     *     UseLogminerReader?: bool,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     SecretsManagerOracleAsmAccessRoleArn?: string,
     *     SecretsManagerOracleAsmSecretId?: string,
     *     TrimSpaceInChar?: bool,
     *     ConvertTimestampWithZoneToUTC?: bool,
     *     OpenTransactionWindow?: int,
     *     AuthenticationMethod?: 'password'|'kerberos'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
