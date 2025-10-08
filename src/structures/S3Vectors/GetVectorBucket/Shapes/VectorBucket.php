<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectorBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vectorBucketName
 * @property string $vectorBucketArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property EncryptionConfiguration|null $encryptionConfiguration
 */
class VectorBucket extends Shape
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     vectorBucketArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     encryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
