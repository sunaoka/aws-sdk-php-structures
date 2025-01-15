<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 183>|null $CoolingPeriod
 * @property 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE'|null $Name
 */
class TieringPolicy extends Shape
{
    /**
     * @param array{
     *     CoolingPeriod?: int<2, 183>|null,
     *     Name?: 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
