<?php

namespace Sunaoka\Aws\Structures\MQ\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property bool|null $ConsoleAccess
 * @property list<string>|null $Groups
 * @property string $Password
 * @property string $Username
 * @property bool|null $ReplicationUser
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     ConsoleAccess?: bool|null,
     *     Groups?: list<string>|null,
     *     Password: string,
     *     Username: string,
     *     ReplicationUser?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
