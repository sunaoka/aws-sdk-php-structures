<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxIndexingCapacityInOCU
 * @property int $maxSearchCapacityInOCU
 */
class CapacityLimits extends Shape
{
    /**
     * @param array{
     *     maxIndexingCapacityInOCU?: int,
     *     maxSearchCapacityInOCU?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
