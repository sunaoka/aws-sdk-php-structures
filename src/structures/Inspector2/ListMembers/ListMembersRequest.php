<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property bool $onlyAssociated
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     onlyAssociated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
