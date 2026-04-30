<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryStrategyId
 * @property string|null $description
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 * @property ModifyStrategyConfiguration|null $configuration
 * @property MemoryRecordSchema|null $memoryRecordSchema
 */
class ModifyMemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     memoryStrategyId: string,
     *     description?: string|null,
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null,
     *     configuration?: ModifyStrategyConfiguration|null,
     *     memoryRecordSchema?: MemoryRecordSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
