<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $createdDate
 * @property string|null $description
 * @property string|null $id
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null $type
 */
class UpdateCollectionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdDate?: int|null,
     *     description?: string|null,
     *     id?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
