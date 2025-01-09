<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Source $s3
 */
class Source extends Shape
{
    /**
     * @param array{s3?: S3Source} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
