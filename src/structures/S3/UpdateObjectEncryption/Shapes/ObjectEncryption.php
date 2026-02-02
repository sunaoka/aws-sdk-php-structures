<?php

namespace Sunaoka\Aws\Structures\S3\UpdateObjectEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSEKMSEncryption|null $SSEKMS
 */
class ObjectEncryption extends Shape
{
    /**
     * @param array{SSEKMS?: SSEKMSEncryption|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
