<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\DescribeSourceServersRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeSourceServersRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     filters?: Shapes\DescribeSourceServersRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
