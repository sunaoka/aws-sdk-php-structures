<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $key
 */
class S3SignedObject extends Shape
{
    /**
     * @param array{
     *     bucketName?: string,
     *     key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
