<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'NONE'|'SSE-C'>|null $EncryptionType
 */
class BlockedEncryptionTypes extends Shape
{
    /**
     * @param array{EncryptionType?: list<'NONE'|'SSE-C'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
