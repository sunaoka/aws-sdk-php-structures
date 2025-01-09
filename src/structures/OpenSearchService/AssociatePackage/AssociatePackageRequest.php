<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property string $DomainName
 * @property list<string> $PrerequisitePackageIDList
 * @property Shapes\PackageAssociationConfiguration $AssociationConfiguration
 */
class AssociatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     DomainName: string,
     *     PrerequisitePackageIDList?: list<string>,
     *     AssociationConfiguration?: Shapes\PackageAssociationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
