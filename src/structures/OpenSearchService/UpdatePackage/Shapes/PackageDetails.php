<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackageID
 * @property string|null $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|null $PackageType
 * @property string|null $PackageDescription
 * @property 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $PackageStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $AvailablePackageVersion
 * @property ErrorDetails|null $ErrorDetails
 * @property string|null $EngineVersion
 * @property PluginProperties|null $AvailablePluginProperties
 */
class PackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string|null,
     *     PackageName?: string|null,
     *     PackageType?: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|null,
     *     PackageDescription?: string|null,
     *     PackageStatus?: 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     AvailablePackageVersion?: string|null,
     *     ErrorDetails?: ErrorDetails|null,
     *     EngineVersion?: string|null,
     *     AvailablePluginProperties?: PluginProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
