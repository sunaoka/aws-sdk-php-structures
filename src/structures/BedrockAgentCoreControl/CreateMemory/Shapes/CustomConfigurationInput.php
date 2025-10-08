<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideConfigurationInput|null $semanticOverride
 * @property SummaryOverrideConfigurationInput|null $summaryOverride
 * @property UserPreferenceOverrideConfigurationInput|null $userPreferenceOverride
 */
class CustomConfigurationInput extends Shape
{
    /**
     * @param array{
     *     semanticOverride?: SemanticOverrideConfigurationInput|null,
     *     summaryOverride?: SummaryOverrideConfigurationInput|null,
     *     userPreferenceOverride?: UserPreferenceOverrideConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
