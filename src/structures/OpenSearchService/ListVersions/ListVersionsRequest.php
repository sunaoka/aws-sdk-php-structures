<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
