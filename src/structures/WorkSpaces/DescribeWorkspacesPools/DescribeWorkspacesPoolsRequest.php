<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PoolIds
 * @property list<Shapes\DescribeWorkspacesPoolsFilter>|null $Filters
 * @property int<1, 25>|null $Limit
 * @property string|null $NextToken
 */
class DescribeWorkspacesPoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>|null,
     *     Filters?: list<Shapes\DescribeWorkspacesPoolsFilter>|null,
     *     Limit?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
