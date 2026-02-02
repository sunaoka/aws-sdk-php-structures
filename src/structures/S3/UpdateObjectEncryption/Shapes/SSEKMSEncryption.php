<?php

namespace Sunaoka\Aws\Structures\S3\UpdateObjectEncryption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSKeyArn
 * @property bool|null $BucketKeyEnabled
 */
class SSEKMSEncryption extends Shape
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
