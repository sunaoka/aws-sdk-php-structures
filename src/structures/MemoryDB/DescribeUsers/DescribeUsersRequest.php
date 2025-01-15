<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
