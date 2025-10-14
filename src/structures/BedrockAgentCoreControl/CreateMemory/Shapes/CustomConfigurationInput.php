<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideConfigurationInput|null $semanticOverride
 * @property SummaryOverrideConfigurationInput|null $summaryOverride
 * @property UserPreferenceOverrideConfigurationInput|null $userPreferenceOverride
 * @property SelfManagedConfigurationInput|null $selfManagedConfiguration
 */
class CustomConfigurationInput extends Shape
{
    /**
     * @param array{
     *     semanticOverride?: SemanticOverrideConfigurationInput|null,
     *     summaryOverride?: SummaryOverrideConfigurationInput|null,
     *     userPreferenceOverride?: UserPreferenceOverrideConfigurationInput|null,
     *     selfManagedConfiguration?: SelfManagedConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
