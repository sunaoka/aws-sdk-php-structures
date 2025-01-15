<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelInvocationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string|null $s3EncryptionKeyId
 * @property string|null $s3BucketOwner
 */
class ModelInvocationJobS3OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     s3EncryptionKeyId?: string|null,
     *     s3BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
