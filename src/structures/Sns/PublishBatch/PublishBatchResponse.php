<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\PublishBatchResultEntry>|null $Successful
 * @property list<Shapes\BatchResultErrorEntry>|null $Failed
 */
class PublishBatchResponse extends Response
{
}
