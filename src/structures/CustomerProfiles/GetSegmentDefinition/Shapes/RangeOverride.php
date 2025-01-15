<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 366> $Start
 * @property int<0, 366>|null $End
 * @property 'DAYS' $Unit
 */
class RangeOverride extends Shape
{
    /**
     * @param array{
     *     Start: int<1, 366>,
     *     End?: int<0, 366>|null,
     *     Unit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
