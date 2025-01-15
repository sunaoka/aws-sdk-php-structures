<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\Queue>|null $Queues
 * @property int|null $TotalConcurrentJobs
 * @property int|null $UnallocatedConcurrentJobs
 */
class ListQueuesResponse extends Response
{
}
