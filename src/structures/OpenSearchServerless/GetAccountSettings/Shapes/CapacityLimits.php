<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, max>|null $maxIndexingCapacityInOCU
 * @property int<2, max>|null $maxSearchCapacityInOCU
 */
class CapacityLimits extends Shape
{
    /**
     * @param array{
     *     maxIndexingCapacityInOCU?: int<2, max>|null,
     *     maxSearchCapacityInOCU?: int<2, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
