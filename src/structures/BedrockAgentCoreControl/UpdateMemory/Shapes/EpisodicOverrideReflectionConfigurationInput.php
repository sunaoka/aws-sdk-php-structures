<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appendToPrompt
 * @property string $modelId
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 * @property MemoryRecordSchema|null $memoryRecordSchema
 */
class EpisodicOverrideReflectionConfigurationInput extends Shape
{
    /**
     * @param array{
     *     appendToPrompt: string,
     *     modelId: string,
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null,
     *     memoryRecordSchema?: MemoryRecordSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
