<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null $status
 * @property array<string, string>|null $tags
 */
class StartRunResponse extends Response
{
}
