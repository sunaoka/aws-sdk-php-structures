<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property list<Shapes\DescribeWorkspacesPoolsFilter> $Filters
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeWorkspacesPoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     Filters?: list<Shapes\DescribeWorkspacesPoolsFilter>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
