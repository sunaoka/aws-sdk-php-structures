<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CriteriaBlockForJob $excludes
 * @property CriteriaBlockForJob $includes
 */
class S3BucketCriteriaForJob extends Shape
{
    /**
     * @param array{
     *     excludes?: CriteriaBlockForJob,
     *     includes?: CriteriaBlockForJob
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
