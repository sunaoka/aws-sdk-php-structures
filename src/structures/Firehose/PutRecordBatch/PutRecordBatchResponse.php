<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecordBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $FailedPutCount
 * @property bool $Encrypted
 * @property list<Shapes\PutRecordBatchResponseEntry> $RequestResponses
 */
class PutRecordBatchResponse extends Response
{
}
