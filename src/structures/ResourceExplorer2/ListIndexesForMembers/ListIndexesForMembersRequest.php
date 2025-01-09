<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIdList
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListIndexesForMembersRequest extends Request
{
    /**
     * @param array{
     *     AccountIdList: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
