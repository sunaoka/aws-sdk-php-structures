<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<string> $buckets
 */
class S3BucketDefinitionForJob extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     buckets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
