<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $ObjectKeyPrefix
 * @property 'SSE_S3'|'SSE_KMS'|null $EncryptionOption
 * @property string|null $KmsKeyId
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     ObjectKeyPrefix?: string|null,
     *     EncryptionOption?: 'SSE_S3'|'SSE_KMS'|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
