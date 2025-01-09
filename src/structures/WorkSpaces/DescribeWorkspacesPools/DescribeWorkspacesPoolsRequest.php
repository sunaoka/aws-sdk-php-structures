<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property list<Shapes\DescribeWorkspacesPoolsFilter> $Filters
 * @property int<1, 25> $Limit
 * @property string $NextToken
 */
class DescribeWorkspacesPoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     Filters?: list<Shapes\DescribeWorkspacesPoolsFilter>,
     *     Limit?: int<1, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
