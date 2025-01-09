<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 */
class CollectionSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
