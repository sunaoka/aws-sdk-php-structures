<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property string|null $apiKeyArn
 * @property string|null $apiBase
 * @property int<1, max>|null $maxTokens
 * @property float|null $temperature
 * @property float|null $topP
 * @property Document|null $additionalParams
 */
class HarnessLiteLlmModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     apiKeyArn?: string|null,
     *     apiBase?: string|null,
     *     maxTokens?: int<1, max>|null,
     *     temperature?: float|null,
     *     topP?: float|null,
     *     additionalParams?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
