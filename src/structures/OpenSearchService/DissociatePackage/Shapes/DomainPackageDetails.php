<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DissociatePackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property string $PackageName
 * @property 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG' $PackageType
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $DomainName
 * @property 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED' $DomainPackageStatus
 * @property string $PackageVersion
 * @property list<string> $PrerequisitePackageIDList
 * @property string $ReferencePath
 * @property ErrorDetails $ErrorDetails
 * @property PackageAssociationConfiguration $AssociationConfiguration
 */
class DomainPackageDetails extends Shape
{
    /**
     * @param array{
     *     PackageID?: string,
     *     PackageName?: string,
     *     PackageType?: 'TXT-DICTIONARY'|'ZIP-PLUGIN'|'PACKAGE-LICENSE'|'PACKAGE-CONFIG',
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     DomainName?: string,
     *     DomainPackageStatus?: 'ASSOCIATING'|'ASSOCIATION_FAILED'|'ACTIVE'|'DISSOCIATING'|'DISSOCIATION_FAILED',
     *     PackageVersion?: string,
     *     PrerequisitePackageIDList?: list<string>,
     *     ReferencePath?: string,
     *     ErrorDetails?: ErrorDetails,
     *     AssociationConfiguration?: PackageAssociationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
