<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3AccessControlPolicy|null $AccessControlPolicy
 */
class S3SetObjectAclOperation extends Shape
{
    /**
     * @param array{AccessControlPolicy?: S3AccessControlPolicy|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
