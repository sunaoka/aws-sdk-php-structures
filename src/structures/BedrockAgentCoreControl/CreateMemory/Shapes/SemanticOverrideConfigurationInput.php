<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideExtractionConfigurationInput|null $extraction
 * @property SemanticOverrideConsolidationConfigurationInput|null $consolidation
 */
class SemanticOverrideConfigurationInput extends Shape
{
    /**
     * @param array{
     *     extraction?: SemanticOverrideExtractionConfigurationInput|null,
     *     consolidation?: SemanticOverrideConsolidationConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
