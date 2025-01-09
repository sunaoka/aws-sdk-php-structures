<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DissociatePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PackageList
 * @property string $DomainName
 */
class DissociatePackagesRequest extends Request
{
    /**
     * @param array{
     *     PackageList: list<string>,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
