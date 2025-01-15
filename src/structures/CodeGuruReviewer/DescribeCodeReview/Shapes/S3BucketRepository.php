<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property S3RepositoryDetails|null $Details
 */
class S3BucketRepository extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Details?: S3RepositoryDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
