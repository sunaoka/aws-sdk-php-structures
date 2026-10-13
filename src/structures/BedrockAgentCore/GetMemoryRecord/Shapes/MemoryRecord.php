<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetMemoryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property MemoryContent $content
 * @property string $memoryStrategyId
 * @property list<string> $namespaces
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property array<string, MemoryRecordMetadataValue>|null $metadata
 * @property \Aws\Api\DateTimeResult|null $expiresAt
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
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     metadata?: array<string, MemoryRecordMetadataValue>|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
