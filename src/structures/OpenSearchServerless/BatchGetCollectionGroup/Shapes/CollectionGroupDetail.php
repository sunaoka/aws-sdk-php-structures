<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property 'ENABLED'|'DISABLED'|null $standbyReplicas
 * @property string|null $description
 * @property list<Tag>|null $tags
 * @property int|null $createdDate
 * @property CollectionGroupCapacityLimits|null $capacityLimits
 * @property int|null $numberOfCollections
 */
class CollectionGroupDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     name?: string|null,
     *     standbyReplicas?: 'ENABLED'|'DISABLED'|null,
     *     description?: string|null,
     *     tags?: list<Tag>|null,
     *     createdDate?: int|null,
     *     capacityLimits?: CollectionGroupCapacityLimits|null,
     *     numberOfCollections?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
