<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'on-demand'|'spot'|'wait-and-save' $type
 */
class ServiceManagedEc2InstanceMarketOptions extends Shape
{
    /**
     * @param array{type: 'on-demand'|'spot'|'wait-and-save'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
