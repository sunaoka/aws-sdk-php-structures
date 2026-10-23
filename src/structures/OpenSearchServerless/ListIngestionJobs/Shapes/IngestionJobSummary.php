<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ingestionJobId
 * @property string|null $arn
 * @property string|null $ingestionJobName
 * @property string|null $indexName
 * @property 'CREATING'|'ACTIVE'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|'CREATE_FAILED'|'CANCEL_FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class IngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     ingestionJobId?: string|null,
     *     arn?: string|null,
     *     ingestionJobName?: string|null,
     *     indexName?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|'CREATE_FAILED'|'CANCEL_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
