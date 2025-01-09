<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PublishBatchResultEntry> $Successful
 * @property list<Shapes\BatchResultErrorEntry> $Failed
 */
class PublishBatchResponse extends Response
{
}
