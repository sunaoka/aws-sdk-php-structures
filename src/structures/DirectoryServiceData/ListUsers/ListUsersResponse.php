<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property string $Realm
 * @property list<Shapes\UserSummary> $Users
 */
class ListUsersResponse extends Response
{
}
