<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVER_SIDE_ENCRYPTION_S3'|'SERVER_SIDE_ENCRYPTION_KMS'|null $EncryptionType
 * @property string|null $KmsEncryptionContext
 * @property string|null $KmsKeyArn
 */
class S3EncryptionSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'SERVER_SIDE_ENCRYPTION_S3'|'SERVER_SIDE_ENCRYPTION_KMS'|null,
     *     KmsEncryptionContext?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
