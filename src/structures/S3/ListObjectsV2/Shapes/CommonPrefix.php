<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 */
class CommonPrefix extends Shape
{
    /**
     * @param array{Prefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
