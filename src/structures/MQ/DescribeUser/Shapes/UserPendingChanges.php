<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ConsoleAccess
 * @property list<string> $Groups
 * @property 'CREATE'|'UPDATE'|'DELETE' $PendingChange
 */
class UserPendingChanges extends Shape
{
    /**
     * @param array{
     *     ConsoleAccess?: bool,
     *     Groups?: list<string>,
     *     PendingChange: 'CREATE'|'UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
