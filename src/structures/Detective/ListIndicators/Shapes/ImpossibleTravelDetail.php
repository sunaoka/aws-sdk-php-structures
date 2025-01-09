<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartingIpAddress
 * @property string $EndingIpAddress
 * @property string $StartingLocation
 * @property string $EndingLocation
 * @property int $HourlyTimeDelta
 */
class ImpossibleTravelDetail extends Shape
{
    /**
     * @param array{
     *     StartingIpAddress?: string,
     *     EndingIpAddress?: string,
     *     StartingLocation?: string,
     *     EndingLocation?: string,
     *     HourlyTimeDelta?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
