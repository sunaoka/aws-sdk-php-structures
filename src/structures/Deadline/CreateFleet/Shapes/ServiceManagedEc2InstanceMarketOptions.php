<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'on-demand'|'spot' $type
 */
class ServiceManagedEc2InstanceMarketOptions extends Shape
{
    /**
     * @param array{type: 'on-demand'|'spot'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
