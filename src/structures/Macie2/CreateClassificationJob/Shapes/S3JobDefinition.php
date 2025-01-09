<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketCriteriaForJob $bucketCriteria
 * @property list<S3BucketDefinitionForJob> $bucketDefinitions
 * @property Scoping $scoping
 */
class S3JobDefinition extends Shape
{
    /**
     * @param array{
     *     bucketCriteria?: S3BucketCriteriaForJob,
     *     bucketDefinitions?: list<S3BucketDefinitionForJob>,
     *     scoping?: Scoping
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
