<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDomainsForPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDomainsForPackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
