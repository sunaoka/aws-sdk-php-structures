<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $OnlyAssociated
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     OnlyAssociated?: bool|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
