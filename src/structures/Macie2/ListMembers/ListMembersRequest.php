<?php

namespace Sunaoka\Aws\Structures\Macie2\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property string $onlyAssociated
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     onlyAssociated?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
