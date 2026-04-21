<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AIModelSourceS3|null $S3
 */
class AIModelSource extends Shape
{
    /**
     * @param array{S3?: AIModelSourceS3|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
