<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ingestionStreamId
 * @property string|null $arn
 * @property string|null $collectionId
 * @property string|null $ingestionStreamName
 * @property string|null $indexName
 * @property string|null $failureIndexName
 * @property IngestionStreamSource|null $source
 * @property string|null $roleArn
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'STARTING'|'SCANNING'|'INGESTION_IN_PROGRESS'|'INGESTION_COMPLETE'|'STOPPED'|'FAILED'|null $state
 * @property IngestionStatistics|null $statistics
 * @property int|null $revision
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<IngestionFailureReason>|null $failureReasons
 * @property list<IngestionAlert>|null $activeAlerts
 */
class IngestionStreamDetail extends Shape
{
    /**
     * @param array{
     *     ingestionStreamId?: string|null,
     *     arn?: string|null,
     *     collectionId?: string|null,
     *     ingestionStreamName?: string|null,
     *     indexName?: string|null,
     *     failureIndexName?: string|null,
     *     source?: IngestionStreamSource|null,
     *     roleArn?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED'|'DELETE_FAILED'|null,
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
