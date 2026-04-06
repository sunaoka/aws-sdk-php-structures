<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property string $DomainName
 * @property list<string>|null $PrerequisitePackageIDList
 * @property Shapes\PackageAssociationConfiguration|null $AssociationConfiguration
 */
class AssociatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     DomainName: string,
     *     PrerequisitePackageIDList?: list<string>|null,
     *     AssociationConfiguration?: Shapes\PackageAssociationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
