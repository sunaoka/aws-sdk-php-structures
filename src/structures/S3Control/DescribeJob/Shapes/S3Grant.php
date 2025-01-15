<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Grantee|null $Grantee
 * @property 'FULL_CONTROL'|'READ'|'WRITE'|'READ_ACP'|'WRITE_ACP'|null $Permission
 */
class S3Grant extends Shape
{
    /**
     * @param array{
     *     Grantee?: S3Grantee|null,
     *     Permission?: 'FULL_CONTROL'|'READ'|'WRITE'|'READ_ACP'|'WRITE_ACP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
