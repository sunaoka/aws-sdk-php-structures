<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $lastStartedAt
 * @property 'ExecuteCommandAgent' $name
 * @property string $reason
 * @property string $lastStatus
 */
class ManagedAgent extends Shape
{
    /**
     * @param array{
     *     lastStartedAt?: \Aws\Api\DateTimeResult,
     *     name?: 'ExecuteCommandAgent',
     *     reason?: string,
     *     lastStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
