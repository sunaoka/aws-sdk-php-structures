<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListMemories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|'UPDATING'|null $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $managedByResourceArn
 */
class MemorySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     id?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'FAILED'|'DELETING'|'UPDATING'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     managedByResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
