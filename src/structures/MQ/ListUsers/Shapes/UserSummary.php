<?php

namespace Sunaoka\Aws\Structures\MQ\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE'|'UPDATE'|'DELETE'|null $PendingChange
 * @property string $Username
 */
class UserSummary extends Shape
{
    /**
     * @param array{
     *     PendingChange?: 'CREATE'|'UPDATE'|'DELETE'|null,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
