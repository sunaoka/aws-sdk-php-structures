<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $s3
 */
class ToolchainSource extends Shape
{
    /**
     * @param array{s3: S3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
