<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3ExportsForLedger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_KMS'|'SSE_S3'|'NO_ENCRYPTION' $ObjectEncryptionType
 * @property string|null $KmsKeyArn
 */
class S3EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectEncryptionType: 'SSE_KMS'|'SSE_S3'|'NO_ENCRYPTION',
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
