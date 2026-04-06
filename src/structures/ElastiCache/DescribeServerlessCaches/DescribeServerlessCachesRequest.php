<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServerlessCacheName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeServerlessCachesRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
