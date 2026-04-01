<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $daemonArn
 * @property 'ACTIVE'|'DELETE_IN_PROGRESS'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class DaemonSummary extends Shape
{
    /**
     * @param array{
     *     daemonArn?: string|null,
     *     status?: 'ACTIVE'|'DELETE_IN_PROGRESS'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
