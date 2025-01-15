<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SignedObject|null $s3
 */
class SignedObject extends Shape
{
    /**
     * @param array{s3?: S3SignedObject|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
