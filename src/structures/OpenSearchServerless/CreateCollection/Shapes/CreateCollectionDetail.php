<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $createdDate
 * @property string $description
 * @property string $id
 * @property string $kmsKeyArn
 * @property int $lastModifiedDate
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $standbyReplicas
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property 'SEARCH'|'TIMESERIES'|'VECTORSEARCH' $type
 */
class CreateCollectionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdDate?: int,
     *     description?: string,
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
