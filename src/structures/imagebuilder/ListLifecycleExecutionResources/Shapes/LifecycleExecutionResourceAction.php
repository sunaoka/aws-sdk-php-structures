<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'DELETE'|'DEPRECATE'|'DISABLE' $name
 * @property string $reason
 */
class LifecycleExecutionResourceAction extends Shape
{
    /**
     * @param array{
     *     name?: 'AVAILABLE'|'DELETE'|'DEPRECATE'|'DISABLE',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
