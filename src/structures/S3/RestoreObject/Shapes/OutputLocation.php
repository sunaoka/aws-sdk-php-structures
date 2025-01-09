<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $S3
 */
class OutputLocation extends Shape
{
    /**
     * @param array{S3?: S3Location} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
