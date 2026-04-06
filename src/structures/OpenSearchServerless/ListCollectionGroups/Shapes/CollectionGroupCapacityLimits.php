<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $maxIndexingCapacityInOCU
 * @property float|null $maxSearchCapacityInOCU
 * @property float|null $minIndexingCapacityInOCU
 * @property float|null $minSearchCapacityInOCU
 */
class CollectionGroupCapacityLimits extends Shape
{
    /**
     * @param array{
     *     maxIndexingCapacityInOCU?: float|null,
     *     maxSearchCapacityInOCU?: float|null,
     *     minIndexingCapacityInOCU?: float|null,
     *     minSearchCapacityInOCU?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
