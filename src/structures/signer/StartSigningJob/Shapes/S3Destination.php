<?php

namespace Sunaoka\Aws\Structures\signer\StartSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $prefix
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     bucketName?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
