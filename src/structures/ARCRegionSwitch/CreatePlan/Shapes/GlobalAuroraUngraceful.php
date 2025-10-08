<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'failover'|null $ungraceful
 */
class GlobalAuroraUngraceful extends Shape
{
    /**
     * @param array{ungraceful?: 'failover'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
