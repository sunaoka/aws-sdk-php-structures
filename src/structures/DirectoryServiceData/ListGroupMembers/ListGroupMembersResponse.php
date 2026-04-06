<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupMembers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $MemberRealm
 * @property list<Shapes\Member>|null $Members
 * @property string|null $NextToken
 * @property string|null $Realm
 */
class ListGroupMembersResponse extends Response
{
}
