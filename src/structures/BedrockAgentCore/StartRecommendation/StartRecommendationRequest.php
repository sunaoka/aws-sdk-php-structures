<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'SYSTEM_PROMPT_RECOMMENDATION'|'TOOL_DESCRIPTION_RECOMMENDATION' $type
 * @property Shapes\RecommendationConfig $recommendationConfig
 * @property string|null $clientToken
 */
class StartRecommendationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     type: 'SYSTEM_PROMPT_RECOMMENDATION'|'TOOL_DESCRIPTION_RECOMMENDATION',
     *     recommendationConfig: Shapes\RecommendationConfig,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
