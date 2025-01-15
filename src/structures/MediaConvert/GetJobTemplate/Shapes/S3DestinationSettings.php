<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationAccessControl|null $AccessControl
 * @property S3EncryptionSettings|null $Encryption
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|null $StorageClass
 */
class S3DestinationSettings extends Shape
{
    /**
     * @param array{
     *     AccessControl?: S3DestinationAccessControl|null,
     *     Encryption?: S3EncryptionSettings|null,
     *     StorageClass?: 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
