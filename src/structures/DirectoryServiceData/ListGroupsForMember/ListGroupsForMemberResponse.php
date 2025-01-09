<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupsForMember;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property list<Shapes\GroupSummary> $Groups
 * @property string $MemberRealm
 * @property string $NextToken
 * @property string $Realm
 */
class ListGroupsForMemberResponse extends Response
{
}
