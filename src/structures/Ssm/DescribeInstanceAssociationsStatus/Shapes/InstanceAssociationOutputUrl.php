<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceAssociationsStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3OutputUrl|null $S3OutputUrl
 */
class InstanceAssociationOutputUrl extends Shape
{
    /**
     * @param array{S3OutputUrl?: S3OutputUrl|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
