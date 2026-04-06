<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationAccessControl|null $AccessControl
 * @property S3EncryptionSettings|null $Encryption
 */
class S3DestinationSettings extends Shape
{
    /**
     * @param array{
     *     AccessControl?: S3DestinationAccessControl|null,
     *     Encryption?: S3EncryptionSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
