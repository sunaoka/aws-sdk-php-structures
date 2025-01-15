<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceEventWindowId
 * @property 'creating'|'deleting'|'active'|'deleted'|null $State
 */
class InstanceEventWindowStateChange extends Shape
{
    /**
     * @param array{
     *     InstanceEventWindowId?: string|null,
     *     State?: 'creating'|'deleting'|'active'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
