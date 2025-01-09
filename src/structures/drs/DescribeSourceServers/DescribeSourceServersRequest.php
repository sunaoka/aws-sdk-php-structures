<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeSourceServersRequestFilters $filters
 * @property int<1, max> $maxResults
 * @property string $nextToken
 */
class DescribeSourceServersRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeSourceServersRequestFilters,
     *     maxResults?: int<1, max>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
