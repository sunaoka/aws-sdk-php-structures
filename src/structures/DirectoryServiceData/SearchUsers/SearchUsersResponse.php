<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $NextToken
 * @property string|null $Realm
 * @property list<Shapes\User>|null $Users
 */
class SearchUsersResponse extends Response
{
}
