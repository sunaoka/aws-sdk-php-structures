<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PackageDetailsForAssociation> $PackageList
 * @property string $DomainName
 */
class AssociatePackagesRequest extends Request
{
    /**
     * @param array{
     *     PackageList: list<Shapes\PackageDetailsForAssociation>,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
