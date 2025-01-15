<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CriteriaBlockForJob|null $excludes
 * @property CriteriaBlockForJob|null $includes
 */
class S3BucketCriteriaForJob extends Shape
{
    /**
     * @param array{
     *     excludes?: CriteriaBlockForJob|null,
     *     includes?: CriteriaBlockForJob|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
