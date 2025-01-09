<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupMembers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property string $MemberRealm
 * @property list<Shapes\Member> $Members
 * @property string $NextToken
 * @property string $Realm
 */
class ListGroupMembersResponse extends Response
{
}
