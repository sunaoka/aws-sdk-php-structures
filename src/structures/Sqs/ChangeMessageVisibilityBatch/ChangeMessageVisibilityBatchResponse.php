<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ChangeMessageVisibilityBatchResultEntry> $Successful
 * @property list<Shapes\BatchResultErrorEntry> $Failed
 */
class ChangeMessageVisibilityBatchResponse extends Response
{
}
