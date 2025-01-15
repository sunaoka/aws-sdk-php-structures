<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $workspaceId
 * @property string|null $syncSource
 * @property SyncJobStatus|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $updateDateTime
 */
class SyncJobSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     workspaceId?: string|null,
     *     syncSource?: string|null,
     *     status?: SyncJobStatus|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     updateDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
