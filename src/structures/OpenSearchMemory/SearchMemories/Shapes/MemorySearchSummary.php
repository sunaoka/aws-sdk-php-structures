<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchMemories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property 'SEMANTIC'|'SUMMARY'|'CUSTOM'|null $memoryType
 * @property string|null $strategyName
 * @property string|null $content
 * @property double|null $score
 * @property SystemMetadata|null $systemMetadata
 * @property array<string, string>|null $metadata
 * @property list<string>|null $sourceEventIds
 */
class MemorySearchSummary extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     memoryType?: 'SEMANTIC'|'SUMMARY'|'CUSTOM'|null,
     *     strategyName?: string|null,
     *     content?: string|null,
     *     score?: double|null,
     *     systemMetadata?: SystemMetadata|null,
     *     metadata?: array<string, string>|null,
     *     sourceEventIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
