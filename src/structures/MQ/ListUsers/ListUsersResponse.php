<?php

namespace Sunaoka\Aws\Structures\MQ\ListUsers;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BrokerId
 * @property int<5, 100> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\UserSummary> $Users
 */
class ListUsersResponse extends Response
{
}
