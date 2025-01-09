<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeServerlessCachesRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
