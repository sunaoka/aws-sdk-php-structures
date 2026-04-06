<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property CollectionGroupCapacityLimits|null $capacityLimits
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class UpdateCollectionGroupDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     capacityLimits?: CollectionGroupCapacityLimits|null,
     *     createdDate?: int|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
