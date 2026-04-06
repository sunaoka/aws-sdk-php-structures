<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartingIpAddress
 * @property string|null $EndingIpAddress
 * @property string|null $StartingLocation
 * @property string|null $EndingLocation
 * @property int|null $HourlyTimeDelta
 */
class ImpossibleTravelDetail extends Shape
{
    /**
     * @param array{
     *     StartingIpAddress?: string|null,
     *     EndingIpAddress?: string|null,
     *     StartingLocation?: string|null,
     *     EndingLocation?: string|null,
     *     HourlyTimeDelta?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
