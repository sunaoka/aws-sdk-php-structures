<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<1, 250>|null $MaxResults
 * @property string|null $MemberRealm
 * @property string|null $NextToken
 * @property string|null $Realm
 * @property string $SAMAccountName
 */
class ListGroupMembersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int<1, 250>|null,
     *     MemberRealm?: string|null,
     *     NextToken?: string|null,
     *     Realm?: string|null,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
