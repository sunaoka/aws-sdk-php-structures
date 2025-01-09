<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'add'|'remove'|'replace'|'move'|'copy'|'test' $op
 * @property string $path
 * @property string $value
 * @property string $from
 */
class PatchOperation extends Shape
{
    /**
     * @param array{
     *     op?: 'add'|'remove'|'replace'|'move'|'copy'|'test',
     *     path?: string,
     *     value?: string,
     *     from?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
