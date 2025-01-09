<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\DescribeSourceServersRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class DescribeSourceServersRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\DescribeSourceServersRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
