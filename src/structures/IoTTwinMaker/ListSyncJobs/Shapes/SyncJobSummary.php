<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $workspaceId
 * @property string $syncSource
 * @property SyncJobStatus $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class SyncJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     workspaceId?: string,
     *     syncSource?: string,
     *     status?: SyncJobStatus,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     updateDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
