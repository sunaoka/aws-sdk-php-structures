<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property int<1, max>|null $maxTokens
 * @property float|null $temperature
 * @property float|null $topP
 */
class HarnessBedrockModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
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
