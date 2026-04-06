<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpisodicOverrideExtractionConfigurationInput|null $extraction
 * @property EpisodicOverrideConsolidationConfigurationInput|null $consolidation
 * @property EpisodicOverrideReflectionConfigurationInput|null $reflection
 */
class EpisodicOverrideConfigurationInput extends Shape
{
    /**
     * @param array{
     *     extraction?: EpisodicOverrideExtractionConfigurationInput|null,
     *     consolidation?: EpisodicOverrideConsolidationConfigurationInput|null,
     *     reflection?: EpisodicOverrideReflectionConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
