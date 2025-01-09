<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxTokens
 * @property float $temperature
 * @property float $topP
 * @property list<string> $stopSequences
 */
class InferenceConfiguration extends Shape
{
    /**
     * @param array{
     *     maxTokens?: int,
     *     temperature?: float,
     *     topP?: float,
     *     stopSequences?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
