<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONL'|null $s3InputFormat
 * @property string $s3Uri
 * @property string|null $s3BucketOwner
 */
class ModelInvocationJobS3InputDataConfig extends Shape
{
    /**
     * @param array{
     *     s3InputFormat?: 'JSONL'|null,
     *     s3Uri: string,
     *     s3BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
