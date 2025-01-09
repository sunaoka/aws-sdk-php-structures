<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Storage $S3
 */
class Storage extends Shape
{
    /**
     * @param array{S3?: S3Storage} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
