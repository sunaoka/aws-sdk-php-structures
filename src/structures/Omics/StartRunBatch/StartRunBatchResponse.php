<?php

namespace Sunaoka\Aws\Structures\Omics\StartRunBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null $status
 * @property string|null $uuid
 * @property array<string, string>|null $tags
 */
class StartRunBatchResponse extends Response
{
}
