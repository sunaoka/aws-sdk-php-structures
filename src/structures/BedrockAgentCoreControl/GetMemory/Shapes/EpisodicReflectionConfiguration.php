<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 * @property MemoryRecordSchema|null $memoryRecordSchema
 */
class EpisodicReflectionConfiguration extends Shape
{
    /**
     * @param array{
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null,
     *     memoryRecordSchema?: MemoryRecordSchema|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
