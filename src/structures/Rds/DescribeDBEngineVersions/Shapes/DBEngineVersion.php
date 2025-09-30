<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property CharacterSet|null $DefaultCharacterSet
 * @property CustomDBEngineVersionAMI|null $Image
 * @property string|null $DBEngineMediaType
 * @property string|null $KMSKeyId
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<CharacterSet>|null $SupportedCharacterSets
 * @property list<CharacterSet>|null $SupportedNcharCharacterSets
 * @property list<UpgradeTarget>|null $ValidUpgradeTarget
 * @property list<Timezone>|null $SupportedTimezones
 * @property list<string>|null $ExportableLogTypes
 * @property bool|null $SupportsLogExportsToCloudwatchLogs
 * @property bool|null $SupportsReadReplica
 * @property list<string>|null $SupportedEngineModes
 * @property list<string>|null $SupportedFeatureNames
 * @property string|null $Status
 * @property bool|null $SupportsParallelQuery
 * @property bool|null $SupportsGlobalDatabases
 * @property list<Tag>|null $TagList
 * @property bool|null $SupportsBabelfish
 * @property bool|null $SupportsLimitlessDatabase
 * @property bool|null $SupportsCertificateRotationWithoutRestart
 * @property list<string>|null $SupportedCACertificateIdentifiers
 * @property bool|null $SupportsLocalWriteForwarding
 * @property bool|null $SupportsIntegrations
 * @property ServerlessV2FeaturesSupport|null $ServerlessV2FeaturesSupport
 */
class DBEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     MajorEngineVersion?: string|null,
     *     EngineVersion?: string|null,
     *     DatabaseInstallationFilesS3BucketName?: string|null,
     *     DatabaseInstallationFilesS3Prefix?: string|null,
     *     CustomDBEngineVersionManifest?: string|null,
     *     DBParameterGroupFamily?: string|null,
     *     DBEngineDescription?: string|null,
     *     DBEngineVersionArn?: string|null,
     *     DBEngineVersionDescription?: string|null,
     *     DefaultCharacterSet?: CharacterSet|null,
     *     Image?: CustomDBEngineVersionAMI|null,
     *     DBEngineMediaType?: string|null,
     *     KMSKeyId?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     SupportedCharacterSets?: list<CharacterSet>|null,
     *     SupportedNcharCharacterSets?: list<CharacterSet>|null,
     *     ValidUpgradeTarget?: list<UpgradeTarget>|null,
     *     SupportedTimezones?: list<Timezone>|null,
     *     ExportableLogTypes?: list<string>|null,
     *     SupportsLogExportsToCloudwatchLogs?: bool|null,
     *     SupportsReadReplica?: bool|null,
     *     SupportedEngineModes?: list<string>|null,
     *     SupportedFeatureNames?: list<string>|null,
     *     Status?: string|null,
     *     SupportsParallelQuery?: bool|null,
     *     SupportsGlobalDatabases?: bool|null,
     *     TagList?: list<Tag>|null,
     *     SupportsBabelfish?: bool|null,
     *     SupportsLimitlessDatabase?: bool|null,
     *     SupportsCertificateRotationWithoutRestart?: bool|null,
     *     SupportedCACertificateIdentifiers?: list<string>|null,
     *     SupportsLocalWriteForwarding?: bool|null,
     *     SupportsIntegrations?: bool|null,
     *     ServerlessV2FeaturesSupport?: ServerlessV2FeaturesSupport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
