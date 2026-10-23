<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListIngestionStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ingestionStreamId
 * @property string|null $arn
 * @property string|null $ingestionStreamName
 * @property string|null $indexName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IngestionStreamSummary extends Shape
{
    /**
     * @param array{
     *     ingestionStreamId?: string|null,
     *     arn?: string|null,
     *     ingestionStreamName?: string|null,
     *     indexName?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
