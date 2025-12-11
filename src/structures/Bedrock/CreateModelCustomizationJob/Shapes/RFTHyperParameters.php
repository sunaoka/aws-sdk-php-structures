<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 50>|null $epochCount
 * @property int<16, 512>|null $batchSize
 * @property float|null $learningRate
 * @property int|null $maxPromptLength
 * @property int<2, 16>|null $trainingSamplePerPrompt
 * @property int|null $inferenceMaxTokens
 * @property 'low'|'medium'|'high'|null $reasoningEffort
 * @property int<1, 100>|null $evalInterval
 */
class RFTHyperParameters extends Shape
{
    /**
     * @param array{
     *     epochCount?: int<1, 50>|null,
     *     batchSize?: int<16, 512>|null,
     *     learningRate?: float|null,
     *     maxPromptLength?: int|null,
     *     trainingSamplePerPrompt?: int<2, 16>|null,
     *     inferenceMaxTokens?: int|null,
     *     reasoningEffort?: 'low'|'medium'|'high'|null,
     *     evalInterval?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
