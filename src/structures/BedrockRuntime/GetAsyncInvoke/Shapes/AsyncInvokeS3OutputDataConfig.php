<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\GetAsyncInvoke\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string $kmsKeyId
 * @property string $bucketOwner
 */
class AsyncInvokeS3OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     kmsKeyId?: string,
     *     bucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
