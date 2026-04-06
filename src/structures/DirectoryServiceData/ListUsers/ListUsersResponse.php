<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $NextToken
 * @property string|null $Realm
 * @property list<Shapes\UserSummary>|null $Users
 */
class ListUsersResponse extends Response
{
}
