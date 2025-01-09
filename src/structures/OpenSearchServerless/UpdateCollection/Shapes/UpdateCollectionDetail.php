<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $createdDate
 * @property string $description
 * @property string $id
 * @property int $lastModifiedDate
 * @property string $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH' $type
 */
class UpdateCollectionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdDate?: int,
     *     description?: string,
     *     id?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
