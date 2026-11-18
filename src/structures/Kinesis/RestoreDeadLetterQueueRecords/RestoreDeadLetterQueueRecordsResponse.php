<?php

namespace Sunaoka\Aws\Structures\Kinesis\RestoreDeadLetterQueueRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RestoreDeadLetterQueueRecordsResultEntry> $Successful
 * @property list<Shapes\RestoreDeadLetterQueueRecordsErrorEntry> $Failed
 */
class RestoreDeadLetterQueueRecordsResponse extends Response
{
}
