<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessLogLocation
 */
class S3AccessConfig extends Shape
{
    /**
     * @param array{accessLogLocation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
