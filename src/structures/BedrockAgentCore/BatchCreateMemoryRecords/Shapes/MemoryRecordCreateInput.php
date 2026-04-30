<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchCreateMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $requestIdentifier
 * @property list<string> $namespaces
 * @property MemoryContent $content
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string|null $memoryStrategyId
 * @property array<string, MemoryRecordMetadataValue>|null $metadata
 */
class MemoryRecordCreateInput extends Shape
{
    /**
     * @param array{
     *     requestIdentifier: string,
     *     namespaces: list<string>,
     *     content: MemoryContent,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     memoryStrategyId?: string|null,
     *     metadata?: array<string, MemoryRecordMetadataValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
