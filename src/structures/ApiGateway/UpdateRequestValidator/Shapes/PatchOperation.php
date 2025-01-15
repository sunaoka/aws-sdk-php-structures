<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateRequestValidator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'add'|'remove'|'replace'|'move'|'copy'|'test'|null $op
 * @property string|null $path
 * @property string|null $value
 * @property string|null $from
 */
class PatchOperation extends Shape
{
    /**
     * @param array{
     *     op?: 'add'|'remove'|'replace'|'move'|'copy'|'test'|null,
     *     path?: string|null,
     *     value?: string|null,
     *     from?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
