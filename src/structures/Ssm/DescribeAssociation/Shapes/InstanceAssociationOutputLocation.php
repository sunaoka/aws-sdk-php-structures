<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3OutputLocation $S3Location
 */
class InstanceAssociationOutputLocation extends Shape
{
    /**
     * @param array{S3Location?: S3OutputLocation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
