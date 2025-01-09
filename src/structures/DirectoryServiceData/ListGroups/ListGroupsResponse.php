<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroups;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property list<Shapes\GroupSummary> $Groups
 * @property string $NextToken
 * @property string $Realm
 */
class ListGroupsResponse extends Response
{
}
