<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketCriteriaForJob|null $bucketCriteria
 * @property list<S3BucketDefinitionForJob>|null $bucketDefinitions
 * @property Scoping|null $scoping
 */
class S3JobDefinition extends Shape
{
    /**
     * @param array{
     *     bucketCriteria?: S3BucketCriteriaForJob|null,
     *     bucketDefinitions?: list<S3BucketDefinitionForJob>|null,
     *     scoping?: Scoping|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
