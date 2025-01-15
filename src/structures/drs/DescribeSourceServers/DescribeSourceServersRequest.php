<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeSourceServersRequestFilters|null $filters
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeSourceServersRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\DescribeSourceServersRequestFilters|null,
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
