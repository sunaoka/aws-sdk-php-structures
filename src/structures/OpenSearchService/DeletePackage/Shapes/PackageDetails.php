<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeletePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property string $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG' $PackageType
 * @property string $PackageDescription
 * @property 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED' $PackageStatus
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $AvailablePackageVersion
 * @property ErrorDetails $ErrorDetails
 * @property string $EngineVersion
 * @property PluginProperties $AvailablePluginProperties
 * @property PackageConfiguration $AvailablePackageConfiguration
 * @property list<string> $AllowListedUserList
 * @property string $PackageOwner
 * @property PackageVendingOptions $PackageVendingOptions
 * @property PackageEncryptionOptions $PackageEncryptionOptions
 */
class PackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string,
     *     PackageName?: string,
     *     PackageType?: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG',
     *     PackageDescription?: string,
     *     PackageStatus?: 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     AvailablePackageVersion?: string,
     *     ErrorDetails?: ErrorDetails,
     *     EngineVersion?: string,
     *     AvailablePluginProperties?: PluginProperties,
     *     AvailablePackageConfiguration?: PackageConfiguration,
     *     AllowListedUserList?: list<string>,
     *     PackageOwner?: string,
     *     PackageVendingOptions?: PackageVendingOptions,
     *     PackageEncryptionOptions?: PackageEncryptionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
