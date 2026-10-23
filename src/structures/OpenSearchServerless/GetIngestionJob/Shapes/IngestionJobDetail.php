<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ingestionJobId
 * @property string|null $arn
 * @property string|null $collectionId
 * @property string|null $ingestionJobName
 * @property string|null $indexName
 * @property string|null $failureIndexName
 * @property IngestionJobSource|null $source
 * @property 'CREATING'|'ACTIVE'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|'CREATE_FAILED'|'CANCEL_FAILED'|null $status
 * @property 'STARTING'|'SCANNING'|'INGESTION_IN_PROGRESS'|'INGESTION_COMPLETE'|'STOPPED'|'FAILED'|null $state
 * @property IngestionStatistics|null $statistics
 * @property int|null $revision
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<IngestionFailureReason>|null $failureReasons
 * @property list<IngestionAlert>|null $activeAlerts
 */
class IngestionJobDetail extends Shape
{
    /**
     * @param array{
     *     ingestionJobId?: string|null,
     *     arn?: string|null,
     *     collectionId?: string|null,
     *     ingestionJobName?: string|null,
     *     indexName?: string|null,
     *     failureIndexName?: string|null,
     *     source?: IngestionJobSource|null,
     *     status?: 'CREATING'|'ACTIVE'|'COMPLETED'|'CANCELLING'|'CANCELLED'|'FAILED'|'CREATE_FAILED'|'CANCEL_FAILED'|null,
     *     state?: 'STARTING'|'SCANNING'|'INGESTION_IN_PROGRESS'|'INGESTION_COMPLETE'|'STOPPED'|'FAILED'|null,
     *     statistics?: IngestionStatistics|null,
     *     revision?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     failureReasons?: list<IngestionFailureReason>|null,
     *     activeAlerts?: list<IngestionAlert>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
