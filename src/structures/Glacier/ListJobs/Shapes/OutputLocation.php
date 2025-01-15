<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location|null $S3
 */
class OutputLocation extends Shape
{
    /**
     * @param array{S3?: S3Location|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
