<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SendMessageBatchResultEntry> $Successful
 * @property list<Shapes\BatchResultErrorEntry> $Failed
 */
class SendMessageBatchResponse extends Response
{
}
