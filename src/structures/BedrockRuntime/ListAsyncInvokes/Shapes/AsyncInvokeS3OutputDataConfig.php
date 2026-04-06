<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ListAsyncInvokes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property string|null $kmsKeyId
 * @property string|null $bucketOwner
 */
class AsyncInvokeS3OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     kmsKeyId?: string|null,
     *     bucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
