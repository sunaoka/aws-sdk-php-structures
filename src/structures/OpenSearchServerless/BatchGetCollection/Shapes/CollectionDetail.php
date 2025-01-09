<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $collectionEndpoint
 * @property int $createdDate
 * @property string $dashboardEndpoint
 * @property string $description
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property string $kmsKeyArn
 * @property int $lastModifiedDate
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $standbyReplicas
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH' $type
 */
class CollectionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     collectionEndpoint?: string,
     *     createdDate?: int,
     *     dashboardEndpoint?: string,
     *     description?: string,
     *     failureCode?: string,
     *     failureMessage?: string,
     *     id?: string,
     *     kmsKeyArn?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     standbyReplicas?: 'ENABLED'|'DISABLED',
     *     status?: 'CREATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     type?: 'SEARCH'|'TIMESERIES'|'VECTORSEARCH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
