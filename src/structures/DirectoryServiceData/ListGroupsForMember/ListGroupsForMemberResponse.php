<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupsForMember;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property list<Shapes\GroupSummary>|null $Groups
 * @property string|null $MemberRealm
 * @property string|null $NextToken
 * @property string|null $Realm
 */
class ListGroupsForMemberResponse extends Response
{
}
