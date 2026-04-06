<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollectionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property int|null $numberOfCollections
 * @property int|null $createdDate
 * @property CollectionGroupCapacityLimits|null $capacityLimits
 */
class CollectionGroupSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     numberOfCollections?: int|null,
     *     createdDate?: int|null,
     *     capacityLimits?: CollectionGroupCapacityLimits|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
