<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $OnlyAssociated
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListMembersRequest extends Request
{
    /**
     * @param array{
     *     OnlyAssociated?: bool,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
