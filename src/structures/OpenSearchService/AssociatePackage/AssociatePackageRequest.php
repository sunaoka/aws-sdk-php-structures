<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AssociatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property string $DomainName
 */
class AssociatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
