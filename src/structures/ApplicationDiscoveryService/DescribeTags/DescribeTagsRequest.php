<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagFilter>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\TagFilter>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
