<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageID
 * @property list<string>|null $PrerequisitePackageIDList
 * @property PackageAssociationConfiguration|null $AssociationConfiguration
 */
class PackageDetailsForAssociation extends Shape
{
    /**
     * @param array{
     *     PackageID: string,
     *     PrerequisitePackageIDList?: list<string>|null,
     *     AssociationConfiguration?: PackageAssociationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
