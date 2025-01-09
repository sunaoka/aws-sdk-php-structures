<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Progress $Details
 */
class ProgressEvent extends Shape
{
    /**
     * @param array{Details?: Progress} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
