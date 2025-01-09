<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Start
 * @property int $End
 * @property 'DAYS' $Unit
 */
class RangeOverride extends Shape
{
    /**
     * @param array{
     *     Start: int,
     *     End?: int,
     *     Unit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
