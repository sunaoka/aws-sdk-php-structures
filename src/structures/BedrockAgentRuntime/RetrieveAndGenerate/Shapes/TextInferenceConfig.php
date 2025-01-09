<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536> $maxTokens
 * @property list<string> $stopSequences
 * @property float $temperature
 * @property float $topP
 */
class TextInferenceConfig extends Shape
{
    /**
     * @param array{
     *     maxTokens?: int<0, 65536>,
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
