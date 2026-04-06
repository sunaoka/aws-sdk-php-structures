<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property bool $PersistentConnection
 */
class PersistentConnectionConfig extends Shape
{
    /**
     * @param array{
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     PersistentConnection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
