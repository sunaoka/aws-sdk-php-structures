<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AIAdapterModelPackageEntry>|null $ModelPackageArns
 * @property list<AIAdapterS3Entry>|null $S3Uris
 */
class AIAdapterSource extends Shape
{
    /**
     * @param array{
     *     ModelPackageArns?: list<AIAdapterModelPackageEntry>|null,
     *     S3Uris?: list<AIAdapterS3Entry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
