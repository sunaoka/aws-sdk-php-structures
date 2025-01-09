<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerSideEncryptionByDefault $ApplyServerSideEncryptionByDefault
 * @property bool $BucketKeyEnabled
 */
class ServerSideEncryptionRule extends Shape
{
    /**
     * @param array{
     *     ApplyServerSideEncryptionByDefault?: ServerSideEncryptionByDefault,
     *     BucketKeyEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
