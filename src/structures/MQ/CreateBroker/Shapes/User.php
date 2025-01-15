<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ConsoleAccess
 * @property list<string>|null $Groups
 * @property string $Password
 * @property string $Username
 * @property bool|null $ReplicationUser
 */
class User extends Shape
{
    /**
     * @param array{
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
