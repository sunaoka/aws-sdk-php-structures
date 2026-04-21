<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Uri
 */
class AIModelSourceS3 extends Shape
{
    /**
     * @param array{S3Uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
