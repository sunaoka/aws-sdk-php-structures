<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Start
 * @property int|null $End
 * @property 'DAYS' $Unit
 */
class RangeOverride extends Shape
{
    /**
     * @param array{
     *     Start: int,
     *     End?: int|null,
     *     Unit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
