<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string|null $ObjectKeyPrefix
 * @property 'SSE_S3'|'SSE_KMS'|null $EncryptionOption
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKeyPrefix?: string|null,
     *     EncryptionOption?: 'SSE_S3'|'SSE_KMS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
