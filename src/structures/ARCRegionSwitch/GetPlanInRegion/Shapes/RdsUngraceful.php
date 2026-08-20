<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'promoteReadReplica'|null $ungraceful
 */
class RdsUngraceful extends Shape
{
    /**
     * @param array{ungraceful?: 'promoteReadReplica'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
