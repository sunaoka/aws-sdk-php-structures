<?php

namespace Sunaoka\Aws\Structures\Rds\CreateCustomDBEngineVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBParameterGroupFamily
 * @property string $DBEngineDescription
 * @property string $DBEngineVersionDescription
 * @property Shapes\CharacterSet $DefaultCharacterSet
 * @property Shapes\CustomDBEngineVersionAMI $Image
 * @property string $DBEngineMediaType
 * @property list<Shapes\CharacterSet> $SupportedCharacterSets
 * @property list<Shapes\CharacterSet> $SupportedNcharCharacterSets
 * @property list<Shapes\UpgradeTarget> $ValidUpgradeTarget
 * @property list<Shapes\Timezone> $SupportedTimezones
 * @property list<string> $ExportableLogTypes
 * @property bool $SupportsLogExportsToCloudwatchLogs
 * @property bool $SupportsReadReplica
 * @property list<string> $SupportedEngineModes
 * @property list<string> $SupportedFeatureNames
 * @property string $Status
 * @property bool $SupportsParallelQuery
 * @property bool $SupportsGlobalDatabases
 * @property string $MajorEngineVersion
 * @property string $DatabaseInstallationFilesS3BucketName
 * @property string $DatabaseInstallationFilesS3Prefix
 * @property string $DBEngineVersionArn
 * @property string $KMSKeyId
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<Shapes\Tag> $TagList
 * @property bool $SupportsBabelfish
 * @property string $CustomDBEngineVersionManifest
 * @property bool $SupportsLimitlessDatabase
 * @property bool $SupportsCertificateRotationWithoutRestart
 * @property list<string> $SupportedCACertificateIdentifiers
 * @property bool $SupportsLocalWriteForwarding
 * @property bool $SupportsIntegrations
 * @property Shapes\ServerlessV2FeaturesSupport $ServerlessV2FeaturesSupport
 */
class CreateCustomDBEngineVersionResponse extends Response
{
}
