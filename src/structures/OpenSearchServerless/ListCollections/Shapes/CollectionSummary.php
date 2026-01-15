<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property string|null $arn
 * @property string|null $kmsKeyArn
 * @property string|null $collectionGroupName
 */
class CollectionSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     arn?: string|null,
     *     kmsKeyArn?: string|null,
     *     collectionGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
