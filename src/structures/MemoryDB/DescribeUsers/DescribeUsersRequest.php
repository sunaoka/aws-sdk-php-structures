<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeUsersRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
