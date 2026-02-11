<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\FrontOfQueueDetail|null $frontOfQueue
 * @property Shapes\QueueSnapshotUtilizationDetail|null $queueUtilization
 */
class GetJobQueueSnapshotResponse extends Response
{
}
