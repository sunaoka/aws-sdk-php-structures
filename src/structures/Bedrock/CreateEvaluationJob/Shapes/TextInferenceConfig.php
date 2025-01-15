<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $temperature
 * @property float|null $topP
 * @property int<0, 65536>|null $maxTokens
 * @property list<string>|null $stopSequences
 */
class TextInferenceConfig extends Shape
{
    /**
     * @param array{
     *     temperature?: float|null,
     *     topP?: float|null,
     *     maxTokens?: int<0, 65536>|null,
     *     stopSequences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
