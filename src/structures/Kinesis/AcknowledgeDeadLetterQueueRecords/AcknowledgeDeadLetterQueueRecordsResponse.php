<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeDeadLetterQueueRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AcknowledgeDeadLetterQueueRecordsResultEntry> $Successful
 * @property list<Shapes\AcknowledgeDeadLetterQueueRecordsErrorEntry> $Failed
 */
class AcknowledgeDeadLetterQueueRecordsResponse extends Response
{
}
