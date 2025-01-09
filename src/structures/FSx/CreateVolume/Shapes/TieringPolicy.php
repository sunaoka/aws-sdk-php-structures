<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 183> $CoolingPeriod
 * @property 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE' $Name
 */
class TieringPolicy extends Shape
{
    /**
     * @param array{
     *     CoolingPeriod?: int<2, 183>,
     *     Name?: 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
