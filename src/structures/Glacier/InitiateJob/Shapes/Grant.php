<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Grantee $Grantee
 * @property 'FULL_CONTROL'|'WRITE'|'WRITE_ACP'|'READ'|'READ_ACP' $Permission
 */
class Grant extends Shape
{
    /**
     * @param array{
     *     Grantee?: Grantee,
     *     Permission?: 'FULL_CONTROL'|'WRITE'|'WRITE_ACP'|'READ'|'READ_ACP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
