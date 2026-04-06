<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListChats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $summary
 */
class ChatExecution extends Shape
{
    /**
     * @param array{
     *     executionId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     summary?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
