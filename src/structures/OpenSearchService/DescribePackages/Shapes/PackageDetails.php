<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackageID
 * @property string|null $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG'|null $PackageType
 * @property string|null $PackageDescription
 * @property 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $PackageStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $AvailablePackageVersion
 * @property ErrorDetails|null $ErrorDetails
 * @property string|null $EngineVersion
 * @property PluginProperties|null $AvailablePluginProperties
 * @property PackageConfiguration|null $AvailablePackageConfiguration
 * @property list<string>|null $AllowListedUserList
 * @property string|null $PackageOwner
 * @property PackageVendingOptions|null $PackageVendingOptions
 * @property PackageEncryptionOptions|null $PackageEncryptionOptions
 */
class PackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string|null,
     *     PackageName?: string|null,
     *     PackageType?: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG'|null,
     *     PackageDescription?: string|null,
     *     PackageStatus?: 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AvailablePackageVersion?: string|null,
     *     ErrorDetails?: ErrorDetails|null,
     *     EngineVersion?: string|null,
     *     AvailablePluginProperties?: PluginProperties|null,
     *     AvailablePackageConfiguration?: PackageConfiguration|null,
     *     AllowListedUserList?: list<string>|null,
     *     PackageOwner?: string|null,
     *     PackageVendingOptions?: PackageVendingOptions|null,
     *     PackageEncryptionOptions?: PackageEncryptionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
