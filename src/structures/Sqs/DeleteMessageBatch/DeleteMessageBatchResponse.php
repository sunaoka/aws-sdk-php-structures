<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessageBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeleteMessageBatchResultEntry> $Successful
 * @property list<Shapes\BatchResultErrorEntry> $Failed
 */
class DeleteMessageBatchResponse extends Response
{
}
