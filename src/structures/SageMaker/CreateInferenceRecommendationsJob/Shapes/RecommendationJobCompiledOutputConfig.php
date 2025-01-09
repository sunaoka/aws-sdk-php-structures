<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputUri
 */
class RecommendationJobCompiledOutputConfig extends Shape
{
    /**
     * @param array{S3OutputUri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
