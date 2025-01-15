<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $collectionEndpoint
 * @property int|null $createdDate
 * @property string|null $dashboardEndpoint
 * @property string|null $description
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property string|null $kmsKeyArn
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property 'ENABLED'|'DISABLED'|null $standbyReplicas
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null $type
 */
class CollectionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     collectionEndpoint?: string|null,
     *     createdDate?: int|null,
     *     dashboardEndpoint?: string|null,
     *     description?: string|null,
     *     failureCode?: string|null,
     *     failureMessage?: string|null,
     *     id?: string|null,
     *     kmsKeyArn?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     standbyReplicas?: 'ENABLED'|'DISABLED'|null,
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
