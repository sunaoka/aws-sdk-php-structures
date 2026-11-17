<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListMemories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property 'SEMANTIC'|'SUMMARY'|'CUSTOM' $memoryType
 * @property string|null $strategyName
 * @property SystemMetadata $systemMetadata
 * @property array<string, string>|null $metadata
 */
class MemoryListSummary extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     memoryType: 'SEMANTIC'|'SUMMARY'|'CUSTOM',
     *     strategyName?: string|null,
     *     systemMetadata: SystemMetadata,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
