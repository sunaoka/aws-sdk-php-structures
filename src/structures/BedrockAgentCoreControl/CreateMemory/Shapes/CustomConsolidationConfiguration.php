<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticConsolidationOverride|null $semanticConsolidationOverride
 * @property SummaryConsolidationOverride|null $summaryConsolidationOverride
 * @property UserPreferenceConsolidationOverride|null $userPreferenceConsolidationOverride
 * @property EpisodicConsolidationOverride|null $episodicConsolidationOverride
 */
class CustomConsolidationConfiguration extends Shape
{
    /**
     * @param array{
     *     semanticConsolidationOverride?: SemanticConsolidationOverride|null,
     *     summaryConsolidationOverride?: SummaryConsolidationOverride|null,
     *     userPreferenceConsolidationOverride?: UserPreferenceConsolidationOverride|null,
     *     episodicConsolidationOverride?: EpisodicConsolidationOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
