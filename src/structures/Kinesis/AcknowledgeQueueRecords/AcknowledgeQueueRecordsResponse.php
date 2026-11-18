<?php

namespace Sunaoka\Aws\Structures\Kinesis\AcknowledgeQueueRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AcknowledgeQueueRecordsResultEntry> $Successful
 * @property list<Shapes\AcknowledgeQueueRecordsErrorEntry> $Failed
 */
class AcknowledgeQueueRecordsResponse extends Response
{
}
