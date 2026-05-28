<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessBedrockModelConfig|null $bedrockModelConfig
 * @property HarnessOpenAiModelConfig|null $openAiModelConfig
 * @property HarnessGeminiModelConfig|null $geminiModelConfig
 * @property HarnessLiteLlmModelConfig|null $liteLlmModelConfig
 */
class HarnessModelConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockModelConfig?: HarnessBedrockModelConfig|null,
     *     openAiModelConfig?: HarnessOpenAiModelConfig|null,
     *     geminiModelConfig?: HarnessGeminiModelConfig|null,
     *     liteLlmModelConfig?: HarnessLiteLlmModelConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
