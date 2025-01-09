<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BrokerId
 * @property bool $ConsoleAccess
 * @property list<string> $Groups
 * @property Shapes\UserPendingChanges $Pending
 * @property string $Username
 * @property bool $ReplicationUser
 */
class DescribeUserResponse extends Response
{
}
