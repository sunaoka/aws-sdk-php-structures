<?php

namespace Sunaoka\Aws\Structures\S3Control\ListCallerAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READ'|'WRITE'|'READWRITE'|null $Permission
 * @property string|null $GrantScope
 * @property string|null $ApplicationArn
 * @property string|null $AccessGrantsInstanceArn
 */
class ListCallerAccessGrantsEntry extends Shape
{
    /**
     * @param array{
     *     Permission?: 'READ'|'WRITE'|'READWRITE'|null,
     *     GrantScope?: string|null,
     *     ApplicationArn?: string|null,
     *     AccessGrantsInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
