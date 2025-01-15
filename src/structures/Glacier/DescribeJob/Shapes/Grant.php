<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Grantee|null $Grantee
 * @property 'FULL_CONTROL'|'WRITE'|'WRITE_ACP'|'READ'|'READ_ACP'|null $Permission
 */
class Grant extends Shape
{
    /**
     * @param array{
     *     Grantee?: Grantee|null,
     *     Permission?: 'FULL_CONTROL'|'WRITE'|'WRITE_ACP'|'READ'|'READ_ACP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
