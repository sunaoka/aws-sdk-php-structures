<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONL' $s3InputFormat
 * @property string $s3Uri
 * @property string $s3BucketOwner
 */
class ModelInvocationJobS3InputDataConfig extends Shape
{
    /**
     * @param array{
     *     s3InputFormat?: 'JSONL',
     *     s3Uri: string,
     *     s3BucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
