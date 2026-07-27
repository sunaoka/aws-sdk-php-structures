<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AIAdapterModelPackageEntry> $ModelPackageArns
 * @property list<AIAdapterS3Entry> $S3Uris
 */
class AIRecommendationAdapterDetails extends Shape
{
    /**
     * @param array{
     *     ModelPackageArns: list<AIAdapterModelPackageEntry>,
     *     S3Uris: list<AIAdapterS3Entry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
