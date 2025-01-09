<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource $s3DataSource
 */
class DataSource extends Shape
{
    /**
     * @param array{s3DataSource: S3DataSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
