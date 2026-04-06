<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string|null $clusterArn
 * @property string|null $serviceArn
 */
class Service extends Shape
{
    /**
     * @param array{
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     clusterArn?: string|null,
     *     serviceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
