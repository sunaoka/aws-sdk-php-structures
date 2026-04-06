<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $routingControlArn
 * @property 'On'|'Off' $state
 */
class ArcRoutingControlState extends Shape
{
    /**
     * @param array{
     *     routingControlArn: string,
     *     state: 'On'|'Off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
