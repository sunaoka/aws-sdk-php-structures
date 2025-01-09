<?php

namespace Sunaoka\Aws\Structures\MQ\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property bool $ConsoleAccess
 * @property list<string> $Groups
 * @property string $Password
 * @property string $Username
 * @property bool $ReplicationUser
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     ConsoleAccess?: bool,
     *     Groups?: list<string>,
     *     Password: string,
     *     Username: string,
     *     ReplicationUser?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
