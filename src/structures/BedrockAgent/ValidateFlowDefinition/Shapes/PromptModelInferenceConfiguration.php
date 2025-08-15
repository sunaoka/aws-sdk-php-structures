<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $temperature
 * @property float|null $topP
 * @property int<0, max>|null $maxTokens
 * @property list<string>|null $stopSequences
 */
class PromptModelInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     temperature?: float|null,
     *     topP?: float|null,
     *     maxTokens?: int<0, max>|null,
     *     stopSequences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
