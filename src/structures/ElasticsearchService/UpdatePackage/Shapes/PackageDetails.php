<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property string $PackageName
 * @property 'TXT-DICTIONARY' $PackageType
 * @property string $PackageDescription
 * @property 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED' $PackageStatus
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $AvailablePackageVersion
 * @property ErrorDetails $ErrorDetails
 */
class PackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string,
     *     PackageName?: string,
     *     PackageType?: 'TXT-DICTIONARY',
     *     PackageDescription?: string,
     *     PackageStatus?: 'COPYING'|'COPY_FAILED'|'VALIDATING'|'VALIDATION_FAILED'|'AVAILABLE'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     AvailablePackageVersion?: string,
     *     ErrorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
