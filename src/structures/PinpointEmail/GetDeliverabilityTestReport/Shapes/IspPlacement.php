<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IspName
 * @property PlacementStatistics|null $PlacementStatistics
 */
class IspPlacement extends Shape
{
    /**
     * @param array{
     *     IspName?: string|null,
     *     PlacementStatistics?: PlacementStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
