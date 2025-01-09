<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED' $status
 * @property array<string, string> $tags
 * @property string $uuid
 * @property string $runOutputUri
 */
class StartRunResponse extends Response
{
}
