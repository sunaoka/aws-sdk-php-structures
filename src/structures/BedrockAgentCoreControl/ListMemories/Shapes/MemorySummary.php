<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListMemories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class MemorySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
