<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property list<Shapes\Queue> $Queues
 * @property int $TotalConcurrentJobs
 * @property int $UnallocatedConcurrentJobs
 */
class ListQueuesResponse extends Response
{
}
