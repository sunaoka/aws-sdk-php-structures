<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'AES256'|'aws:kms'|'UNKNOWN'|'aws:kms:dsse' $encryptionType
 * @property string $kmsMasterKeyId
 */
class ServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     encryptionType?: 'NONE'|'AES256'|'aws:kms'|'UNKNOWN'|'aws:kms:dsse',
     *     kmsMasterKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
