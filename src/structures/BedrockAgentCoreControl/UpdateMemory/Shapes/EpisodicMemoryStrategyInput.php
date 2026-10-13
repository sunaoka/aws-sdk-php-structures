<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $namespaces
 * @property list<string>|null $namespaceTemplates
 * @property EpisodicReflectionConfigurationInput|null $reflectionConfiguration
 * @property MemoryRecordSchema|null $memoryRecordSchema
 * @property RecordExpirySpecification|null $recordExpirySpecification
 */
class EpisodicMemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     namespaces?: list<string>|null,
     *     namespaceTemplates?: list<string>|null,
     *     reflectionConfiguration?: EpisodicReflectionConfigurationInput|null,
     *     memoryRecordSchema?: MemoryRecordSchema|null,
     *     recordExpirySpecification?: RecordExpirySpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
