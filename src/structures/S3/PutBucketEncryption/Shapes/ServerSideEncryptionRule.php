<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerSideEncryptionByDefault|null $ApplyServerSideEncryptionByDefault
 * @property bool|null $BucketKeyEnabled
 * @property BlockedEncryptionTypes|null $BlockedEncryptionTypes
 */
class ServerSideEncryptionRule extends Shape
{
    /**
     * @param array{
     *     ApplyServerSideEncryptionByDefault?: ServerSideEncryptionByDefault|null,
     *     BucketKeyEnabled?: bool|null,
     *     BlockedEncryptionTypes?: BlockedEncryptionTypes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
