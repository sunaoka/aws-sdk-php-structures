<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $tokens
 * @property 'encoded_text' $type
 */
class EncodedTextChunk extends Shape
{
    /**
     * @param array{
     *     tokens: list<int>,
     *     type: 'encoded_text'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
