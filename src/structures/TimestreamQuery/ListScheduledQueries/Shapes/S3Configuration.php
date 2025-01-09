<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKeyPrefix
 * @property 'SSE_S3'|'SSE_KMS' $EncryptionOption
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKeyPrefix?: string,
     *     EncryptionOption?: 'SSE_S3'|'SSE_KMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
