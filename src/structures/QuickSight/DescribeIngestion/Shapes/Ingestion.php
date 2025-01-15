<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $IngestionId
 * @property 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED' $IngestionStatus
 * @property ErrorInfo|null $ErrorInfo
 * @property RowInfo|null $RowInfo
 * @property QueueInfo|null $QueueInfo
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property int|null $IngestionTimeInSeconds
 * @property int|null $IngestionSizeInBytes
 * @property 'MANUAL'|'SCHEDULED'|null $RequestSource
 * @property 'INITIAL_INGESTION'|'EDIT'|'INCREMENTAL_REFRESH'|'FULL_REFRESH'|null $RequestType
 */
class Ingestion extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     IngestionId?: string|null,
     *     IngestionStatus: 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED',
     *     ErrorInfo?: ErrorInfo|null,
     *     RowInfo?: RowInfo|null,
     *     QueueInfo?: QueueInfo|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     IngestionTimeInSeconds?: int|null,
     *     IngestionSizeInBytes?: int|null,
     *     RequestSource?: 'MANUAL'|'SCHEDULED'|null,
     *     RequestType?: 'INITIAL_INGESTION'|'EDIT'|'INCREMENTAL_REFRESH'|'FULL_REFRESH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
