<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ConsoleAccess
 * @property list<string> $Groups
 * @property string $Password
 * @property string $Username
 * @property bool $ReplicationUser
 */
class User extends Shape
{
    /**
     * @param array{
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
