<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\TagFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
