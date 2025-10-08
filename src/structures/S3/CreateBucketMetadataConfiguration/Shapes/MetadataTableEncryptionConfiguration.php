<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws:kms'|'AES256' $SseAlgorithm
 * @property string|null $KmsKeyArn
 */
class MetadataTableEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     SseAlgorithm: 'aws:kms'|'AES256',
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
