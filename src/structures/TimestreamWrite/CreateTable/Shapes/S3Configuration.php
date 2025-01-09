<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKeyPrefix
 * @property 'SSE_S3'|'SSE_KMS' $EncryptionOption
 * @property string $KmsKeyId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     ObjectKeyPrefix?: string,
     *     EncryptionOption?: 'SSE_S3'|'SSE_KMS',
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
