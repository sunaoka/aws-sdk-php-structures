<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketOwner
 * @property string|null $S3Bucket
 * @property string|null $S3KeyPrefix
 * @property 'AES256'|'KMS'|null $S3SseAlgorithm
 * @property string|null $S3SseKmsKeyId
 * @property list<'ERROR'|'CONDITION_CHECK_FAILURE'> $OutputType
 */
class OutputS3Configuration extends Shape
{
    /**
     * @param array{
     *     S3BucketOwner?: string|null,
     *     S3Bucket?: string|null,
     *     S3KeyPrefix?: string|null,
     *     S3SseAlgorithm?: 'AES256'|'KMS'|null,
     *     S3SseKmsKeyId?: string|null,
     *     OutputType: list<'ERROR'|'CONDITION_CHECK_FAILURE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
