<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IspName
 * @property PlacementStatistics $PlacementStatistics
 */
class IspPlacement extends Shape
{
    /**
     * @param array{
     *     IspName?: string,
     *     PlacementStatistics?: PlacementStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
