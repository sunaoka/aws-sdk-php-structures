<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property array<string, list<ArcRoutingControlState>> $regionAndRoutingControls
 */
class ArcRoutingControlConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     regionAndRoutingControls: array<string, list<ArcRoutingControlState>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
