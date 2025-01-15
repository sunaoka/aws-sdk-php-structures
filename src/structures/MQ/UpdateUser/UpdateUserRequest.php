<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property bool|null $ConsoleAccess
 * @property list<string>|null $Groups
 * @property string|null $Password
 * @property string $Username
 * @property bool|null $ReplicationUser
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     ConsoleAccess?: bool|null,
     *     Groups?: list<string>|null,
     *     Password?: string|null,
     *     Username: string,
     *     ReplicationUser?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
