<?php

namespace Sunaoka\Aws\Structures\MQ\ListUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BrokerId
 * @property int<5, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\UserSummary>|null $Users
 */
class ListUsersResponse extends Response
{
}
