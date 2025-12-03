<?php

namespace Sunaoka\Aws\Structures\S3Vectors\CreateVectorBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vectorBucketName
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property array<string, string>|null $tags
 */
class CreateVectorBucketRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
