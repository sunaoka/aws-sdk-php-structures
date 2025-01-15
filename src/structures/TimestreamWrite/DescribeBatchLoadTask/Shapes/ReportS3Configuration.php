<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string|null $ObjectKeyPrefix
 * @property 'SSE_S3'|'SSE_KMS'|null $EncryptionOption
 * @property string|null $KmsKeyId
 */
class ReportS3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKeyPrefix?: string|null,
     *     EncryptionOption?: 'SSE_S3'|'SSE_KMS'|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
