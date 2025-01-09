<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListPackagesForDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property string $PackageName
 * @property 'TXT-DICTIONARY' $PackageType
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $DomainName
 * @property 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED' $DomainPackageStatus
 * @property string $PackageVersion
 * @property string $ReferencePath
 * @property ErrorDetails $ErrorDetails
 */
class DomainPackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string,
     *     PackageName?: string,
     *     PackageType?: 'TXT-DICTIONARY',
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     DomainName?: string,
     *     DomainPackageStatus?: 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED',
     *     PackageVersion?: string,
     *     ReferencePath?: string,
     *     ErrorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
