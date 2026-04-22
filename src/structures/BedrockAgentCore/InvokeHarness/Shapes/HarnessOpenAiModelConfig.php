<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property string $apiKeyArn
 * @property int<1, max>|null $maxTokens
 * @property float|null $temperature
 * @property float|null $topP
 */
class HarnessOpenAiModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     apiKeyArn: string,
     *     maxTokens?: int<1, max>|null,
     *     temperature?: float|null,
     *     topP?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
