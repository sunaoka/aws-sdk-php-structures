<?php

namespace Sunaoka\Aws\Structures\S3Vectors\CreateVectorBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vectorBucketName
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class CreateVectorBucketRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
