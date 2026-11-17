<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actorId
 * @property string|null $sessionId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class SystemMetadata extends Shape
{
    /**
     * @param array{
     *     actorId?: string|null,
     *     sessionId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
