<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalS3Export\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_KMS'|'SSE_S3'|'NO_ENCRYPTION' $ObjectEncryptionType
 * @property string $KmsKeyArn
 */
class S3EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectEncryptionType: 'SSE_KMS'|'SSE_S3'|'NO_ENCRYPTION',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
