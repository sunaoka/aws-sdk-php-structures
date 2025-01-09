<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $keyPrefix
 */
class S3Config extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     keyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
