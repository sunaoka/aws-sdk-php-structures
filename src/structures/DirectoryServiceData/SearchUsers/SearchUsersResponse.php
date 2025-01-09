<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property string $Realm
 * @property list<Shapes\User> $Users
 */
class SearchUsersResponse extends Response
{
}
