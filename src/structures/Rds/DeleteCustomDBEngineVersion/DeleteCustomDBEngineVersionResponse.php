<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Engine
 * @property string|null $MajorEngineVersion
 * @property string|null $EngineVersion
 * @property string|null $DatabaseInstallationFilesS3BucketName
 * @property string|null $DatabaseInstallationFilesS3Prefix
 * @property string|null $CustomDBEngineVersionManifest
 * @property string|null $DBParameterGroupFamily
 * @property string|null $DBEngineDescription
 * @property string|null $DBEngineVersionArn
 * @property string|null $DBEngineVersionDescription
 * @property Shapes\CharacterSet|null $DefaultCharacterSet
 * @property Shapes\CustomDBEngineVersionAMI|null $Image
 * @property string|null $DBEngineMediaType
 * @property string|null $KMSKeyId
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<Shapes\CharacterSet>|null $SupportedCharacterSets
 * @property list<Shapes\CharacterSet>|null $SupportedNcharCharacterSets
 * @property list<Shapes\UpgradeTarget>|null $ValidUpgradeTarget
 * @property list<Shapes\Timezone>|null $SupportedTimezones
 * @property list<string>|null $ExportableLogTypes
 * @property bool|null $SupportsLogExportsToCloudwatchLogs
 * @property bool|null $SupportsReadReplica
 * @property list<string>|null $SupportedEngineModes
 * @property list<string>|null $SupportedFeatureNames
 * @property string|null $Status
 * @property bool|null $SupportsParallelQuery
 * @property bool|null $SupportsGlobalDatabases
 * @property list<Shapes\Tag>|null $TagList
 * @property bool|null $SupportsBabelfish
 * @property bool|null $SupportsLimitlessDatabase
 * @property bool|null $SupportsCertificateRotationWithoutRestart
 * @property list<string>|null $SupportedCACertificateIdentifiers
 * @property bool|null $SupportsLocalWriteForwarding
 * @property bool|null $SupportsIntegrations
 * @property Shapes\ServerlessV2FeaturesSupport|null $ServerlessV2FeaturesSupport
 */
class DeleteCustomDBEngineVersionResponse extends Response
{
}
