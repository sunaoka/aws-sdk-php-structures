<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property MemoryContent $content
 * @property string $memoryStrategyId
 * @property list<string> $namespaces
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property double|null $score
 */
class MemoryRecordSummary extends Shape
{
    /**
     * @param array{
     *     memoryRecordId: string,
     *     content: MemoryContent,
     *     memoryStrategyId: string,
     *     namespaces: list<string>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     score?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
