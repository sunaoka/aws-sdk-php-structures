<?php

namespace Sunaoka\Aws\Structures\Ec2\BundleInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Storage|null $S3
 */
class Storage extends Shape
{
    /**
     * @param array{S3?: S3Storage|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
