<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserPreferenceOverrideExtractionConfigurationInput|null $extraction
 * @property UserPreferenceOverrideConsolidationConfigurationInput|null $consolidation
 */
class UserPreferenceOverrideConfigurationInput extends Shape
{
    /**
     * @param array{
     *     extraction?: UserPreferenceOverrideExtractionConfigurationInput|null,
     *     consolidation?: UserPreferenceOverrideConsolidationConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
