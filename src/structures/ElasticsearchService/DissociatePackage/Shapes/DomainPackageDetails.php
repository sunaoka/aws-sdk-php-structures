<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DissociatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackageID
 * @property string|null $PackageName
 * @property 'TXT-DICTIONARY'|null $PackageType
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $DomainName
 * @property 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED'|null $DomainPackageStatus
 * @property string|null $PackageVersion
 * @property string|null $ReferencePath
 * @property ErrorDetails|null $ErrorDetails
 */
class DomainPackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string|null,
     *     PackageName?: string|null,
     *     PackageType?: 'TXT-DICTIONARY'|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     DomainName?: string|null,
     *     DomainPackageStatus?: 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED'|null,
     *     PackageVersion?: string|null,
     *     ReferencePath?: string|null,
     *     ErrorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
