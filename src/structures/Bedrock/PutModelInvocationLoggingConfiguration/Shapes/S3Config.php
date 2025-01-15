<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutModelInvocationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $keyPrefix
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
