<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER_SIDE_ENCRYPTION_S3'|'SERVER_SIDE_ENCRYPTION_KMS' $EncryptionType
 * @property string $KmsEncryptionContext
 * @property string $KmsKeyArn
 */
class S3EncryptionSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'SERVER_SIDE_ENCRYPTION_S3'|'SERVER_SIDE_ENCRYPTION_KMS',
     *     KmsEncryptionContext?: string,
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
