<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessLogLocation
 */
class S3AccessConfig extends Shape
{
    /**
     * @param array{accessLogLocation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
