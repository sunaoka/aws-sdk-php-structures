<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3AccessControlPolicy $AccessControlPolicy
 */
class S3SetObjectAclOperation extends Shape
{
    /**
     * @param array{AccessControlPolicy?: S3AccessControlPolicy} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
