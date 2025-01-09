<?php

namespace Sunaoka\Aws\Structures\S3Control\ListCallerAccessGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property string $GrantScope
 * @property string $ApplicationArn
 */
class ListCallerAccessGrantsEntry extends Shape
{
    /**
     * @param array{
     *     Permission?: 'READ'|'WRITE'|'READWRITE',
     *     GrantScope?: string,
     *     ApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
