<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int $MaxResults
 * @property string $MemberRealm
 * @property string $NextToken
 * @property string $Realm
 * @property string $SAMAccountName
 */
class ListGroupMembersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int,
     *     MemberRealm?: string,
     *     NextToken?: string,
     *     Realm?: string,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
