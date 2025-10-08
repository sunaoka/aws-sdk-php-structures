<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property MemoryContent|null $content
 * @property list<string>|null $namespaces
 * @property string|null $memoryStrategyId
 */
class MemoryRecordUpdateInput extends Shape
{
    /**
     * @param array{
     *     memoryRecordId: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     content?: MemoryContent|null,
     *     namespaces?: list<string>|null,
     *     memoryStrategyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
