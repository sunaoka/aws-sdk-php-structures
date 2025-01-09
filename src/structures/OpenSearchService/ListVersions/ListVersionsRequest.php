<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class ListVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
