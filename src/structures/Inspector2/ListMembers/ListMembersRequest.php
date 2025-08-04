<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $onlyAssociated
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     onlyAssociated?: bool|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
