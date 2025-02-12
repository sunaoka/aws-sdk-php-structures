<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null $type
 * @property string|null $description
 * @property string|null $arn
 * @property string|null $kmsKeyArn
 * @property 'ENABLED'|'DISABLED'|null $standbyReplicas
 * @property int|null $createdDate
 * @property int|null $lastModifiedDate
 */
class CreateCollectionDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null,
     *     description?: string|null,
     *     arn?: string|null,
     *     kmsKeyArn?: string|null,
     *     standbyReplicas?: 'ENABLED'|'DISABLED'|null,
     *     createdDate?: int|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
