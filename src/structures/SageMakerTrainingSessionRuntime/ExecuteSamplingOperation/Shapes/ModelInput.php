<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EncodedTextChunk> $chunks
 */
class ModelInput extends Shape
{
    /**
     * @param array{chunks: list<EncodedTextChunk>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
