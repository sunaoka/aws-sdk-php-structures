<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $lastStartedAt
 * @property 'ExecuteCommandAgent'|null $name
 * @property string|null $reason
 * @property string|null $lastStatus
 */
class ManagedAgent extends Shape
{
    /**
     * @param array{
     *     lastStartedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: 'ExecuteCommandAgent'|null,
     *     reason?: string|null,
     *     lastStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
