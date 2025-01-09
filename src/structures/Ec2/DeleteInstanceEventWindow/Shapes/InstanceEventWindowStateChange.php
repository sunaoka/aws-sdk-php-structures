<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceEventWindowId
 * @property 'creating'|'deleting'|'active'|'deleted' $State
 */
class InstanceEventWindowStateChange extends Shape
{
    /**
     * @param array{
     *     InstanceEventWindowId?: string,
     *     State?: 'creating'|'deleting'|'active'|'deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
