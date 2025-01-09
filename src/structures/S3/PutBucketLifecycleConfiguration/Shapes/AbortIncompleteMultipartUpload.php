<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DaysAfterInitiation
 */
class AbortIncompleteMultipartUpload extends Shape
{
    /**
     * @param array{DaysAfterInitiation?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
