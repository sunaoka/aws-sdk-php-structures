<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws:kms'|'AES256' $EncryptionType
 * @property string $KMSKeyId
 * @property string $KMSContext
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'aws:kms'|'AES256',
     *     KMSKeyId?: string,
     *     KMSContext?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
