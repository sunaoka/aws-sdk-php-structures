<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SemanticOverrideExtractionConfigurationInput|null $semanticExtractionOverride
 * @property UserPreferenceOverrideExtractionConfigurationInput|null $userPreferenceExtractionOverride
 * @property EpisodicOverrideExtractionConfigurationInput|null $episodicExtractionOverride
 */
class CustomExtractionConfigurationInput extends Shape
{
    /**
     * @param array{
     *     semanticExtractionOverride?: SemanticOverrideExtractionConfigurationInput|null,
     *     userPreferenceExtractionOverride?: UserPreferenceOverrideExtractionConfigurationInput|null,
     *     episodicExtractionOverride?: EpisodicOverrideExtractionConfigurationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
