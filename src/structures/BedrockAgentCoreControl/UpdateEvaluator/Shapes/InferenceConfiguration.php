<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maxTokens
 * @property float|null $temperature
 * @property float|null $topP
 * @property list<string>|null $stopSequences
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens?: int<1, max>|null,
     *     temperature?: float|null,
     *     topP?: float|null,
     *     stopSequences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
