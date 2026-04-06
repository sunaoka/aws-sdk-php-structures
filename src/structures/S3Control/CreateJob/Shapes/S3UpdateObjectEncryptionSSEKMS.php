<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSKeyArn
 * @property bool|null $BucketKeyEnabled
 */
class S3UpdateObjectEncryptionSSEKMS extends Shape
{
    /**
     * @param array{
     *     KMSKeyArn: string,
     *     BucketKeyEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
