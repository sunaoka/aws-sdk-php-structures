<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 * @property MemoryRecordSchema|null $memoryRecordSchema
 * @property RecordExpirySpecification|null $recordExpirySpecification
 */
class SemanticMemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null,
     *     memoryRecordSchema?: MemoryRecordSchema|null,
     *     recordExpirySpecification?: RecordExpirySpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
