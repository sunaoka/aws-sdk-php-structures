<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoolingPeriod
 * @property 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE' $Name
 */
class TieringPolicy extends Shape
{
    /**
     * @param array{
     *     CoolingPeriod?: int,
     *     Name?: 'SNAPSHOT_ONLY'|'AUTO'|'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
