<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIdList
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListIndexesForMembersRequest extends Request
{
    /**
     * @param array{
     *     AccountIdList: list<string>,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
