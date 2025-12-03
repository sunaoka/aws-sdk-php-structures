<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideConsolidationConfigurationInput|null $semanticConsolidationOverride
 * @property SummaryOverrideConsolidationConfigurationInput|null $summaryConsolidationOverride
 * @property UserPreferenceOverrideConsolidationConfigurationInput|null $userPreferenceConsolidationOverride
 * @property EpisodicOverrideConsolidationConfigurationInput|null $episodicConsolidationOverride
 */
class CustomConsolidationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     semanticConsolidationOverride?: SemanticOverrideConsolidationConfigurationInput|null,
     *     summaryConsolidationOverride?: SummaryOverrideConsolidationConfigurationInput|null,
     *     userPreferenceConsolidationOverride?: UserPreferenceOverrideConsolidationConfigurationInput|null,
     *     episodicConsolidationOverride?: EpisodicOverrideConsolidationConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
