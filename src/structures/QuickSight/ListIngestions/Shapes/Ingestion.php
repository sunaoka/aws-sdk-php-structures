<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIngestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $IngestionId
 * @property 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED' $IngestionStatus
 * @property ErrorInfo $ErrorInfo
 * @property RowInfo $RowInfo
 * @property QueueInfo $QueueInfo
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property int $IngestionTimeInSeconds
 * @property int $IngestionSizeInBytes
 * @property 'MANUAL'|'SCHEDULED' $RequestSource
 * @property 'INITIAL_INGESTION'|'EDIT'|'INCREMENTAL_REFRESH'|'FULL_REFRESH' $RequestType
 */
class Ingestion extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     IngestionId?: string,
     *     IngestionStatus: 'INITIALIZED'|'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'CANCELLED',
     *     ErrorInfo?: ErrorInfo,
     *     RowInfo?: RowInfo,
     *     QueueInfo?: QueueInfo,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     IngestionTimeInSeconds?: int,
     *     IngestionSizeInBytes?: int,
     *     RequestSource?: 'MANUAL'|'SCHEDULED',
     *     RequestType?: 'INITIAL_INGESTION'|'EDIT'|'INCREMENTAL_REFRESH'|'FULL_REFRESH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
