<?php

namespace Sunaoka\Aws\Structures\signer\StartSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Source|null $s3
 */
class Source extends Shape
{
    /**
     * @param array{s3?: S3Source|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
