<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property list<string> $PrerequisitePackageIDList
 * @property PackageAssociationConfiguration $AssociationConfiguration
 */
class PackageDetailsForAssociation extends Shape
{
    /**
     * @param array{
     *     PackageID: string,
     *     PrerequisitePackageIDList?: list<string>,
     *     AssociationConfiguration?: PackageAssociationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
