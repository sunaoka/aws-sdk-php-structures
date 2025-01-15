<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'AES256'|'aws:kms'|'UNKNOWN'|'aws:kms:dsse'|null $encryptionType
 * @property string|null $kmsMasterKeyId
 */
class ServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     encryptionType?: 'NONE'|'AES256'|'aws:kms'|'UNKNOWN'|'aws:kms:dsse'|null,
     *     kmsMasterKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
