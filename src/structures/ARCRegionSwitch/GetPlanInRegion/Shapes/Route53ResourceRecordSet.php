<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recordSetIdentifier
 * @property string|null $region
 */
class Route53ResourceRecordSet extends Shape
{
    /**
     * @param array{
     *     recordSetIdentifier?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
