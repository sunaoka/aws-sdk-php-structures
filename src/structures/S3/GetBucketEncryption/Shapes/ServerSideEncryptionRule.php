<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerSideEncryptionByDefault|null $ApplyServerSideEncryptionByDefault
 * @property bool|null $BucketKeyEnabled
 */
class ServerSideEncryptionRule extends Shape
{
    /**
     * @param array{
     *     ApplyServerSideEncryptionByDefault?: ServerSideEncryptionByDefault|null,
     *     BucketKeyEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
