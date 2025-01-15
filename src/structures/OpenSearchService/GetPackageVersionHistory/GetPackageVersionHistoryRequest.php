<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetPackageVersionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class GetPackageVersionHistoryRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
