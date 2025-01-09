<?php

namespace Sunaoka\Aws\Structures\Macie2\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $onlyAssociated
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     onlyAssociated?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
