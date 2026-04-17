<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListAntennas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groundStationName
 * @property string $antennaName
 * @property string $region
 */
class AntennaListItem extends Shape
{
    /**
     * @param array{
     *     groundStationName: string,
     *     antennaName: string,
     *     region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
