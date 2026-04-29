<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ToolDescriptionOutput>|null $tools
 * @property RecommendationResultConfigurationBundle|null $configurationBundle
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class ToolDescriptionRecommendationResult extends Shape
{
    /**
     * @param array{
     *     tools?: list<ToolDescriptionOutput>|null,
     *     configurationBundle?: RecommendationResultConfigurationBundle|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
