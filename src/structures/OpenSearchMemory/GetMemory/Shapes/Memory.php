<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property 'SEMANTIC'|'SUMMARY'|'CUSTOM' $memoryType
 * @property string|null $strategyName
 * @property string $content
 * @property SystemMetadata $systemMetadata
 * @property array<string, string>|null $metadata
 */
class Memory extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     memoryType: 'SEMANTIC'|'SUMMARY'|'CUSTOM',
     *     strategyName?: string|null,
     *     content: string,
     *     systemMetadata: SystemMetadata,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
