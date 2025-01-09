<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IsolineAvoidanceAreaGeometry> $Except
 * @property IsolineAvoidanceAreaGeometry $Geometry
 */
class IsolineAvoidanceArea extends Shape
{
    /**
     * @param array{
     *     Except?: list<IsolineAvoidanceAreaGeometry>,
     *     Geometry: IsolineAvoidanceAreaGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
