<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property string $apiKeyArn
 * @property int<1, max>|null $maxTokens
 * @property float|null $temperature
 * @property float|null $topP
 * @property int<0, 500>|null $topK
 */
class HarnessGeminiModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     apiKeyArn: string,
     *     maxTokens?: int<1, max>|null,
     *     temperature?: float|null,
     *     topP?: float|null,
     *     topK?: int<0, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
