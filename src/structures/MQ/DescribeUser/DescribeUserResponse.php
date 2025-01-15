<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BrokerId
 * @property bool|null $ConsoleAccess
 * @property list<string>|null $Groups
 * @property Shapes\UserPendingChanges|null $Pending
 * @property string|null $Username
 * @property bool|null $ReplicationUser
 */
class DescribeUserResponse extends Response
{
}
