<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdapterId
 * @property string $ModelPackageArn
 */
class AIAdapterModelPackageEntry extends Shape
{
    /**
     * @param array{
     *     AdapterId: string,
     *     ModelPackageArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
