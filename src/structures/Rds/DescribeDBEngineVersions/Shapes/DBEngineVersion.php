<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBParameterGroupFamily
 * @property string $DBEngineDescription
 * @property string $DBEngineVersionDescription
 * @property CharacterSet $DefaultCharacterSet
 * @property CustomDBEngineVersionAMI $Image
 * @property string $DBEngineMediaType
 * @property list<CharacterSet> $SupportedCharacterSets
 * @property list<CharacterSet> $SupportedNcharCharacterSets
 * @property list<UpgradeTarget> $ValidUpgradeTarget
 * @property list<Timezone> $SupportedTimezones
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
 * @property list<Tag> $TagList
 * @property bool $SupportsBabelfish
 * @property string $CustomDBEngineVersionManifest
 * @property bool $SupportsLimitlessDatabase
 * @property bool $SupportsCertificateRotationWithoutRestart
 * @property list<string> $SupportedCACertificateIdentifiers
 * @property bool $SupportsLocalWriteForwarding
 * @property bool $SupportsIntegrations
 * @property ServerlessV2FeaturesSupport $ServerlessV2FeaturesSupport
 */
class DBEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBParameterGroupFamily?: string,
     *     DBEngineDescription?: string,
     *     DBEngineVersionDescription?: string,
     *     DefaultCharacterSet?: CharacterSet,
     *     Image?: CustomDBEngineVersionAMI,
     *     DBEngineMediaType?: string,
     *     SupportedCharacterSets?: list<CharacterSet>,
     *     SupportedNcharCharacterSets?: list<CharacterSet>,
     *     ValidUpgradeTarget?: list<UpgradeTarget>,
     *     SupportedTimezones?: list<Timezone>,
     *     ExportableLogTypes?: list<string>,
     *     SupportsLogExportsToCloudwatchLogs?: bool,
     *     SupportsReadReplica?: bool,
     *     SupportedEngineModes?: list<string>,
     *     SupportedFeatureNames?: list<string>,
     *     Status?: string,
     *     SupportsParallelQuery?: bool,
     *     SupportsGlobalDatabases?: bool,
     *     MajorEngineVersion?: string,
     *     DatabaseInstallationFilesS3BucketName?: string,
     *     DatabaseInstallationFilesS3Prefix?: string,
     *     DBEngineVersionArn?: string,
     *     KMSKeyId?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     TagList?: list<Tag>,
     *     SupportsBabelfish?: bool,
     *     CustomDBEngineVersionManifest?: string,
     *     SupportsLimitlessDatabase?: bool,
     *     SupportsCertificateRotationWithoutRestart?: bool,
     *     SupportedCACertificateIdentifiers?: list<string>,
     *     SupportsLocalWriteForwarding?: bool,
     *     SupportsIntegrations?: bool,
     *     ServerlessV2FeaturesSupport?: ServerlessV2FeaturesSupport
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
