<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property list<Shapes\GroupSummary>|null $Groups
 * @property string|null $NextToken
 * @property string|null $Realm
 */
class ListGroupsResponse extends Response
{
}
