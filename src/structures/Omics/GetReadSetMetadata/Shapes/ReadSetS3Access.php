<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Uri
 */
class ReadSetS3Access extends Shape
{
    /**
     * @param array{s3Uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
