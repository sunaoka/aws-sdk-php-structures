<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketName
 * @property string|null $key
 */
class S3SignedObject extends Shape
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
