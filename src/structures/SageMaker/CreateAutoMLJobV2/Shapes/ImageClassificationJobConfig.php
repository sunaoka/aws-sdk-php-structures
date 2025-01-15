<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 */
class ImageClassificationJobConfig extends Shape
{
    /**
     * @param array{CompletionCriteria?: AutoMLJobCompletionCriteria|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
