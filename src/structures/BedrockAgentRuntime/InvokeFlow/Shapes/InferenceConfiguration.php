<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $temperature
 * @property float|null $topP
 * @property int<0, 500>|null $topK
 * @property int<0, 8192>|null $maximumLength
 * @property list<string>|null $stopSequences
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     temperature?: float|null,
     *     topP?: float|null,
     *     topK?: int<0, 500>|null,
     *     maximumLength?: int<0, 8192>|null,
     *     stopSequences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
