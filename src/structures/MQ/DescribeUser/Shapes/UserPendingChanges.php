<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ConsoleAccess
 * @property list<string>|null $Groups
 * @property 'CREATE'|'UPDATE'|'DELETE' $PendingChange
 */
class UserPendingChanges extends Shape
{
    /**
     * @param array{
     *     ConsoleAccess?: bool|null,
     *     Groups?: list<string>|null,
     *     PendingChange: 'CREATE'|'UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
