<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $temperature
 * @property float $topP
 * @property int $maxTokens
 * @property list<string> $stopSequences
 */
class TextInferenceConfig extends Shape
{
    /**
     * @param array{
     *     temperature?: float,
     *     topP?: float,
     *     maxTokens?: int,
     *     stopSequences?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
