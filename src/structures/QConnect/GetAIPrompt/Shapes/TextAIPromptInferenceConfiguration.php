<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $temperature
 * @property float|null $topP
 * @property int<0, 200>|null $topK
 * @property int<0, 4096>|null $maxTokensToSample
 */
class TextAIPromptInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     temperature?: float|null,
     *     topP?: float|null,
     *     topK?: int<0, 200>|null,
     *     maxTokensToSample?: int<0, 4096>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
