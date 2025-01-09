<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxTokens
 * @property list<string> $stopSequences
 * @property float $temperature
 * @property float $topP
 */
class PromptModelInferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens?: int,
     *     stopSequences?: list<string>,
     *     temperature?: float,
     *     topP?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
