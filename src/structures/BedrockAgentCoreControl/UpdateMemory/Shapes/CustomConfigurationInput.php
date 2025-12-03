<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideConfigurationInput|null $semanticOverride
 * @property SummaryOverrideConfigurationInput|null $summaryOverride
 * @property UserPreferenceOverrideConfigurationInput|null $userPreferenceOverride
 * @property EpisodicOverrideConfigurationInput|null $episodicOverride
 * @property SelfManagedConfigurationInput|null $selfManagedConfiguration
 */
class CustomConfigurationInput extends Shape
{
    /**
     * @param array{
     *     semanticOverride?: SemanticOverrideConfigurationInput|null,
     *     summaryOverride?: SummaryOverrideConfigurationInput|null,
     *     userPreferenceOverride?: UserPreferenceOverrideConfigurationInput|null,
     *     episodicOverride?: EpisodicOverrideConfigurationInput|null,
     *     selfManagedConfiguration?: SelfManagedConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
