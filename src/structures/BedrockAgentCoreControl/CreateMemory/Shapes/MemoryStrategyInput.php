<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticMemoryStrategyInput|null $semanticMemoryStrategy
 * @property SummaryMemoryStrategyInput|null $summaryMemoryStrategy
 * @property UserPreferenceMemoryStrategyInput|null $userPreferenceMemoryStrategy
 * @property CustomMemoryStrategyInput|null $customMemoryStrategy
 * @property EpisodicMemoryStrategyInput|null $episodicMemoryStrategy
 */
class MemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     semanticMemoryStrategy?: SemanticMemoryStrategyInput|null,
     *     summaryMemoryStrategy?: SummaryMemoryStrategyInput|null,
     *     userPreferenceMemoryStrategy?: UserPreferenceMemoryStrategyInput|null,
     *     customMemoryStrategy?: CustomMemoryStrategyInput|null,
     *     episodicMemoryStrategy?: EpisodicMemoryStrategyInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
