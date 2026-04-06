<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'DELETE'|'DEPRECATE'|'DISABLE'|null $name
 * @property string|null $reason
 */
class LifecycleExecutionResourceAction extends Shape
{
    /**
     * @param array{
     *     name?: 'AVAILABLE'|'DELETE'|'DEPRECATE'|'DISABLE'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
