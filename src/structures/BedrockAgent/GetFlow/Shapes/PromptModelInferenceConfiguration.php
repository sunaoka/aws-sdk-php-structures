<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 8192>|null $maxTokens
 * @property list<string>|null $stopSequences
 * @property float|null $temperature
 * @property float|null $topP
 */
class PromptModelInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens?: int<0, 8192>|null,
     *     stopSequences?: list<string>|null,
     *     temperature?: float|null,
     *     topP?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
