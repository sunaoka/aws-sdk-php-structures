<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetMemoryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property MemoryContent $content
 * @property string $memoryStrategyId
 * @property list<string> $namespaces
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property array<string, MetadataValue>|null $metadata
 */
class MemoryRecord extends Shape
{
    /**
     * @param array{
     *     memoryRecordId: string,
     *     content: MemoryContent,
     *     memoryStrategyId: string,
     *     namespaces: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, MetadataValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
